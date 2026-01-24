<?php

namespace FriendsOfBotble\GoogleIndexing\Http\Controllers\Settings;

use Botble\Setting\Http\Controllers\SettingController;
use Exception;
use FriendsOfBotble\GoogleIndexing\Forms\Settings\GoogleIndexingSettingForm;
use FriendsOfBotble\GoogleIndexing\Http\Requests\Settings\GoogleIndexingSettingRequest;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Http\JsonResponse;

class GoogleIndexingSettingController extends SettingController
{
    public function edit()
    {
        $this->pageTitle(trans('plugins/fob-google-indexing::google-indexing.settings.title'));

        return GoogleIndexingSettingForm::create()->renderForm();
    }

    public function update(GoogleIndexingSettingRequest $request)
    {
        $validated = $request->validated();

        // Handle credentials separately (encrypted storage)
        if (! empty($validated['google_indexing_credentials_json'])) {
            $stored = GoogleIndexingService::storeCredentials($validated['google_indexing_credentials_json']);

            if (! $stored) {
                return $this->httpResponse()
                    ->setError()
                    ->setMessage(trans('plugins/fob-google-indexing::google-indexing.settings.credentials_invalid'));
            }
        }

        // Remove from standard settings save
        unset($validated['google_indexing_credentials_json']);

        return $this->performUpdate($validated)
            ->withUpdatedSuccessMessage();
    }

    public function testConnection(GoogleIndexingService $service): JsonResponse
    {
        try {
            if (! $service->isEnabled()) {
                return response()->json([
                    'success' => false,
                    'message' => trans('plugins/fob-google-indexing::google-indexing.settings.not_enabled'),
                ], 400);
            }

            $isValid = $service->validateCredentials();

            return response()->json([
                'success' => $isValid,
                'message' => $isValid
                    ? trans('plugins/fob-google-indexing::google-indexing.settings.connection_success')
                    : trans('plugins/fob-google-indexing::google-indexing.settings.connection_failed'),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function testUrl(GoogleIndexingService $service): JsonResponse
    {
        try {
            $url = request('url');

            if (! $url) {
                return response()->json([
                    'success' => false,
                    'message' => trans('plugins/fob-google-indexing::google-indexing.settings.url_required'),
                ], 400);
            }

            $result = $service->submitUrl($url);

            return response()->json([
                'success' => $result['status'] === 'success',
                'message' => $result['message'] ?? 'Unknown result',
                'data' => $result['data'] ?? null,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function getQuota(GoogleIndexingService $service): JsonResponse
    {
        return response()->json($service->getQuotaUsage());
    }
}
