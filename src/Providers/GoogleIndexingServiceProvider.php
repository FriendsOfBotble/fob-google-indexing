<?php

namespace FriendsOfBotble\GoogleIndexing\Providers;

use Botble\Base\Facades\PanelSectionManager;
use Botble\Base\PanelSections\PanelSectionItem;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Setting\PanelSections\SettingOthersPanelSection;
use FriendsOfBotble\GoogleIndexing\Commands\GoogleIndexingCommand;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Support\ServiceProvider;

class GoogleIndexingServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->singleton(GoogleIndexingService::class);
    }

    public function boot(): void
    {
        $this->setNamespace('plugins/fob-google-indexing')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes();

        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'plugins.fob-google-indexing');

        PanelSectionManager::default()->beforeRendering(function (): void {
            PanelSectionManager::registerItem(
                SettingOthersPanelSection::class,
                fn () => PanelSectionItem::make('google-indexing')
                    ->setTitle(trans('plugins/fob-google-indexing::google-indexing.settings.title'))
                    ->withIcon('ti ti-api')
                    ->withDescription(trans('plugins/fob-google-indexing::google-indexing.settings.description'))
                    ->withPriority(200)
                    ->withRoute('fob-google-indexing.settings')
            );
        });

        if ($this->app->runningInConsole()) {
            $this->commands([
                GoogleIndexingCommand::class,
            ]);
        }

        $this->app->booted(function (): void {
            $this->app->register(HookServiceProvider::class);
            $this->app->register(EventServiceProvider::class);
        });
    }
}
