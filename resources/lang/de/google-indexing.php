<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurieren Sie die Google Indexing API für eine schnellere Inhaltsindexierung in der Google-Suche. Diese API ist für Stellenanzeigen-Websites konzipiert, um Google zu benachrichtigen, wenn Stellen veröffentlicht, aktualisiert oder entfernt werden.',

        'enable' => 'Google Indexing API aktivieren',
        'enable_help' => 'Wenn aktiviert, werden Stellenanzeigen automatisch an Google zur schnelleren Indexierung übermittelt',

        'credentials_json' => 'Dienstkonto-Anmeldedaten (JSON)',
        'credentials_json_help' => 'Fügen Sie den vollständigen JSON-Inhalt aus Ihrer Google-Dienstkonto-Schlüsseldatei ein. Dies wird vor der Speicherung verschlüsselt. Teilen Sie diesen Schlüssel niemals öffentlich.',

        'credentials_configured' => 'Dienstkonto-Anmeldedaten sind konfiguriert und gültig.',
        'credentials_missing' => 'Keine Anmeldedaten konfiguriert. Fügen Sie Ihren Google-Dienstkonto-JSON-Schlüssel unten ein.',
        'credentials_invalid' => 'Ungültiges Anmeldedatenformat. Stellen Sie sicher, dass das JSON die Felder client_email und private_key enthält.',

        'status' => 'Status & Tests',
        'quota_used' => 'Kontingent verwendet',
        'completed_today' => 'Heute abgeschlossen',
        'pending' => 'Ausstehend',
        'failed' => 'Fehlgeschlagen',

        'test_connection' => 'Verbindung testen',
        'test_url' => 'URL-Übermittlung testen',
        'submit' => 'Absenden',
        'testing' => 'Teste...',
        'submitting' => 'Übermittle...',

        'not_enabled' => 'Google Indexing API ist nicht aktiviert. Aktivieren Sie sie oben und speichern Sie zuerst die Einstellungen.',
        'connection_success' => 'Verbindung erfolgreich! Anmeldedaten sind gültig.',
        'connection_failed' => 'Verbindung fehlgeschlagen. Bitte überprüfen Sie Ihre Anmeldedaten.',
        'url_required' => 'Bitte geben Sie eine URL zum Testen ein.',

        'quota_info' => 'Kontingent-Informationen',
        'quota_daily' => 'Tägliches Limit: 200 Veröffentlichungsanfragen (wird um Mitternacht UTC zurückgesetzt)',
        'quota_fallback' => 'Wenn das Kontingent erschöpft ist, werden URLs in die Warteschlange gestellt und automatisch verarbeitet, wenn das Kontingent zurückgesetzt wird',

        'setup_instructions' => 'Einrichtungsanleitung',
        'service_account_email' => 'Dienstkonto-E-Mail',
        'search_console_setup' => 'Dienstkonto zur Google Search Console hinzufügen',
        'step_1' => 'Gehen Sie zur Google Search Console und wählen Sie Ihre Property aus',
        'step_2' => 'Navigieren Sie zu Einstellungen → Nutzer und Berechtigungen',
        'step_3' => 'Klicken Sie auf die Schaltfläche "Nutzer hinzufügen"',
        'step_4' => 'Fügen Sie die Dienstkonto-E-Mail oben ein und setzen Sie die Berechtigung auf "Inhaber"',
        'step_5' => 'Klicken Sie auf "Hinzufügen" zum Speichern',
        'open_search_console' => 'Search Console öffnen',
        'open_cloud_console' => 'Indexing API aktivieren',
    ],
];
