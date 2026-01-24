<?php

namespace FriendsOfBotble\GoogleIndexing\Http\Requests\Settings;

use Botble\Support\Http\Requests\Request;

class GoogleIndexingSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'google_indexing_enabled' => ['nullable', 'in:0,1'],
            'google_indexing_credentials_json' => ['nullable', 'string'],
        ];
    }
}
