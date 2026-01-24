<?php

namespace FriendsOfBotble\GoogleIndexing\Services;

use Exception;
use FriendsOfBotble\GoogleIndexing\Models\GoogleIndexingPending;
use Google\Client as GoogleClient;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleIndexingService
{
    protected bool $enabled;

    protected ?array $credentials = null;

    protected ?GoogleClient $googleClient = null;

    protected string $apiEndpoint;

    protected string $metadataEndpoint;

    protected string $scope;

    protected int $dailyQuota;

    public function __construct()
    {
        $this->enabled = (bool) setting('google_indexing_enabled', false);
        $this->apiEndpoint = config('plugins.fob-google-indexing.api_endpoint');
        $this->metadataEndpoint = config('plugins.fob-google-indexing.metadata_endpoint');
        $this->scope = config('plugins.fob-google-indexing.scope');
        $this->dailyQuota = config('plugins.fob-google-indexing.daily_quota', 200);

        $this->loadCredentials();
    }

    protected function loadCredentials(): void
    {
        $encrypted = setting('google_indexing_credentials');

        if (! $encrypted) {
            return;
        }

        try {
            $decrypted = Crypt::decryptString($encrypted);
            $this->credentials = json_decode($decrypted, true);
        } catch (Exception $e) {
            Log::error('Google Indexing: Failed to decrypt credentials', ['error' => $e->getMessage()]);
        }
    }

    public function isEnabled(): bool
    {
        return $this->enabled && $this->credentials !== null;
    }

    public function submitUrl(string $url, string $type = 'URL_UPDATED'): array
    {
        if (! $this->isEnabled()) {
            return ['status' => 'disabled', 'message' => 'Google Indexing API is disabled'];
        }

        if (! $this->isQuotaAvailable()) {
            GoogleIndexingPending::queueUrl($url, $type);

            return ['status' => 'queued', 'message' => 'Quota exhausted, queued for tomorrow'];
        }

        return $this->sendNotification($url, $type);
    }

    public function deleteUrl(string $url): array
    {
        return $this->submitUrl($url, 'URL_DELETED');
    }

    protected function sendNotification(string $url, string $type): array
    {
        try {
            $token = $this->getAccessToken();

            if (! $token) {
                return ['status' => 'error', 'message' => 'Failed to obtain access token'];
            }

            $response = Http::timeout(30)
                ->withToken($token)
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post($this->apiEndpoint, ['url' => $url, 'type' => $type]);

            $this->incrementQuotaUsage();

            if ($response->successful()) {
                Log::info('Google Indexing: URL submitted', ['url' => $url, 'type' => $type]);

                return [
                    'status' => 'success',
                    'message' => "Successfully submitted {$type} for {$url}",
                    'data' => $response->json(),
                ];
            }

            $responseData = $response->json();
            $errorMessage = $responseData['error']['message'] ?? 'Unknown error';
            $errorStatus = $responseData['error']['status'] ?? '';

            Log::warning('Google Indexing: API request failed', [
                'url' => $url,
                'status_code' => $response->status(),
                'error' => $errorMessage,
                'body' => $response->body(),
            ]);

            // Provide helpful error messages for common issues
            $userMessage = match ($response->status()) {
                403 => "Permission denied. Make sure the service account email is added as Owner in Google Search Console for this domain. Error: {$errorMessage}",
                401 => "Authentication failed. Check your service account credentials. Error: {$errorMessage}",
                429 => "Quota exceeded. Daily limit reached. URLs will be queued for tomorrow.",
                400 => "Bad request. URL may be invalid or not in a verified property. Error: {$errorMessage}",
                default => "API request failed (HTTP {$response->status()}): {$errorMessage}",
            };

            return [
                'status' => 'error',
                'message' => $userMessage,
                'status_code' => $response->status(),
                'error_details' => $errorMessage,
            ];
        } catch (Exception $e) {
            Log::error('Google Indexing: Exception', ['url' => $url, 'error' => $e->getMessage()]);

            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    protected function getAccessToken(): ?string
    {
        try {
            $client = $this->getGoogleClient();

            if (! $client) {
                return null;
            }

            $tokenData = $client->fetchAccessTokenWithAssertion();

            return $tokenData['access_token'] ?? null;
        } catch (Exception $e) {
            Log::error('Google Indexing: Token fetch failed', ['error' => $e->getMessage()]);

            return null;
        }
    }

    protected function getGoogleClient(): ?GoogleClient
    {
        if ($this->googleClient) {
            return $this->googleClient;
        }

        if (! $this->credentials) {
            return null;
        }

        try {
            $this->googleClient = new GoogleClient();
            $this->googleClient->setAuthConfig($this->credentials);
            $this->googleClient->addScope($this->scope);

            return $this->googleClient;
        } catch (Exception $e) {
            Log::error('Google Indexing: Client init failed', ['error' => $e->getMessage()]);

            return null;
        }
    }

    public function getQuotaUsage(): array
    {
        $today = now()->format('Y-m-d');
        $used = (int) cache()->get("google_indexing_quota_{$today}", 0);

        return [
            'date' => $today,
            'used' => $used,
            'limit' => $this->dailyQuota,
            'remaining' => max(0, $this->dailyQuota - $used),
        ];
    }

    protected function incrementQuotaUsage(): void
    {
        $today = now()->format('Y-m-d');
        $key = "google_indexing_quota_{$today}";
        $current = (int) cache()->get($key, 0);
        cache()->put($key, $current + 1, now()->endOfDay());
    }

    public function isQuotaAvailable(): bool
    {
        return $this->getQuotaUsage()['remaining'] > 0;
    }

    public function validateCredentials(): bool
    {
        if (! $this->credentials) {
            return false;
        }

        return isset($this->credentials['client_email'], $this->credentials['private_key']);
    }

    public function getStatus(string $url): array
    {
        if (! $this->isEnabled()) {
            return ['status' => 'disabled'];
        }

        try {
            $token = $this->getAccessToken();

            if (! $token) {
                return ['status' => 'error', 'message' => 'Failed to obtain token'];
            }

            $response = Http::timeout(30)
                ->withToken($token)
                ->get($this->metadataEndpoint, ['url' => $url]);

            return $response->successful()
                ? ['status' => 'success', 'data' => $response->json()]
                : ['status' => 'error', 'status_code' => $response->status()];
        } catch (Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public static function storeCredentials(string $jsonContent): bool
    {
        try {
            $decoded = json_decode($jsonContent, true);

            if (! isset($decoded['client_email'], $decoded['private_key'])) {
                return false;
            }

            $encrypted = Crypt::encryptString($jsonContent);
            setting()->set('google_indexing_credentials', $encrypted)->save();

            return true;
        } catch (Exception $e) {
            Log::error('Google Indexing: Failed to store credentials', ['error' => $e->getMessage()]);

            return false;
        }
    }

    public function processPendingQueue(): array
    {
        $pending = GoogleIndexingPending::pending()->limit(50)->get();
        $processed = 0;
        $failed = 0;

        foreach ($pending as $item) {
            if (! $this->isQuotaAvailable()) {
                break;
            }

            $result = $this->sendNotification($item->url, $item->type);

            if ($result['status'] === 'success') {
                $item->update(['status' => 'completed']);
                $processed++;
            } else {
                $item->increment('attempts');

                if ($item->attempts >= 3) {
                    $item->update(['status' => 'failed', 'last_error' => $result['message']]);
                }

                $failed++;
            }
        }

        return ['processed' => $processed, 'failed' => $failed];
    }
}
