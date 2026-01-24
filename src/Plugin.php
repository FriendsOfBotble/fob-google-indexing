<?php

namespace FriendsOfBotble\GoogleIndexing;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function activated(): void
    {
        // Migrations run automatically
    }

    public static function deactivated(): void
    {
        // Keep data on deactivation
    }

    public static function removed(): void
    {
        Schema::dropIfExists('fob_google_indexing_pending');

        setting()->delete([
            'google_indexing_enabled',
            'google_indexing_credentials',
        ]);
    }
}
