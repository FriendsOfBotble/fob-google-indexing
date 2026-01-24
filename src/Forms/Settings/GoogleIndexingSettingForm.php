<?php

namespace FriendsOfBotble\GoogleIndexing\Forms\Settings;

use Botble\Base\Forms\FieldOptions\AlertFieldOption;
use Botble\Base\Forms\FieldOptions\HtmlFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\Fields\AlertField;
use Botble\Base\Forms\Fields\HtmlField;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Setting\Forms\SettingForm;
use FriendsOfBotble\GoogleIndexing\Http\Requests\Settings\GoogleIndexingSettingRequest;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Support\Facades\Crypt;

class GoogleIndexingSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $service = app(GoogleIndexingService::class);
        $hasCredentials = $service->validateCredentials();
        $savedCredentials = $this->getSavedCredentials();

        $this
            ->setSectionTitle(trans('plugins/fob-google-indexing::google-indexing.settings.title'))
            ->setSectionDescription(trans('plugins/fob-google-indexing::google-indexing.settings.description'))
            ->setValidatorClass(GoogleIndexingSettingRequest::class)
            ->add(
                'google_indexing_enabled',
                OnOffCheckboxField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/fob-google-indexing::google-indexing.settings.enable'))
                    ->helperText(trans('plugins/fob-google-indexing::google-indexing.settings.enable_help'))
                    ->value(setting('google_indexing_enabled', false))
            )
            ->add(
                'credentials_status',
                AlertField::class,
                AlertFieldOption::make()
                    ->type($hasCredentials ? 'success' : 'warning')
                    ->content($hasCredentials
                        ? trans('plugins/fob-google-indexing::google-indexing.settings.credentials_configured')
                        : trans('plugins/fob-google-indexing::google-indexing.settings.credentials_missing'))
            )
            ->add(
                'google_indexing_credentials_json',
                TextareaField::class,
                TextareaFieldOption::make()
                    ->label(trans('plugins/fob-google-indexing::google-indexing.settings.credentials_json'))
                    ->helperText(trans('plugins/fob-google-indexing::google-indexing.settings.credentials_json_help'))
                    ->placeholder('{"type": "service_account", "project_id": "...", ...}')
                    ->value($savedCredentials)
                    ->rows(6)
            )
            ->add(
                'settings_info',
                HtmlField::class,
                HtmlFieldOption::make()
                    ->content(view('plugins/fob-google-indexing::partials.settings-info', [
                        'service' => $service,
                    ])->render())
            );
    }

    protected function getSavedCredentials(): ?string
    {
        $encrypted = setting('google_indexing_credentials');

        if (! $encrypted) {
            return null;
        }

        try {
            return Crypt::decryptString($encrypted);
        } catch (\Exception) {
            return null;
        }
    }
}
