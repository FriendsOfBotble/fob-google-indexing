<?php

use Botble\Base\Facades\AdminHelper;
use FriendsOfBotble\GoogleIndexing\Http\Controllers\Settings\GoogleIndexingSettingController;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function (): void {
    Route::group(['prefix' => 'settings'], function (): void {
        Route::get('google-indexing', [GoogleIndexingSettingController::class, 'edit'])
            ->name('fob-google-indexing.settings')
            ->permission('settings.options');

        Route::put('google-indexing', [GoogleIndexingSettingController::class, 'update'])
            ->name('fob-google-indexing.settings.update')
            ->permission('settings.options');
    });

    Route::group(['prefix' => 'settings/google-indexing', 'as' => 'fob-google-indexing.settings.'], function (): void {
        Route::post('test-connection', [GoogleIndexingSettingController::class, 'testConnection'])
            ->name('test-connection')
            ->permission('settings.options');

        Route::post('test-url', [GoogleIndexingSettingController::class, 'testUrl'])
            ->name('test-url')
            ->permission('settings.options');

        Route::get('quota', [GoogleIndexingSettingController::class, 'getQuota'])
            ->name('quota')
            ->permission('settings.options');
    });
});
