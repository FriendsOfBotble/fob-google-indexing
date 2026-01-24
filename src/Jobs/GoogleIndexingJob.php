<?php

namespace FriendsOfBotble\GoogleIndexing\Jobs;

use Exception;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class GoogleIndexingJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public int $tries = 3;

    public int $backoff = 60;

    public function __construct(
        public string $url,
        public string $type = 'URL_UPDATED',
        public ?string $contentType = null,
        public int|string|null $contentId = null
    ) {
    }

    public function handle(GoogleIndexingService $service): void
    {
        if (! $service->isEnabled()) {
            return;
        }

        $result = $service->submitUrl($this->url, $this->type);

        if ($result['status'] === 'error' && isset($result['status_code']) && $result['status_code'] === 429) {
            throw new Exception('Quota exceeded, will retry');
        }

        Log::info('Google Indexing: Job completed', [
            'url' => $this->url,
            'type' => $this->type,
            'result' => $result['status'],
        ]);
    }

    public function failed(Throwable $exception): void
    {
        Log::error('Google Indexing: Job failed permanently', [
            'url' => $this->url,
            'type' => $this->type,
            'error' => $exception->getMessage(),
        ]);
    }
}
