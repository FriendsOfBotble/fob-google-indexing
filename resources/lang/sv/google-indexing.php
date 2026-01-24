<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurera Google Indexing API för snabbare innehållsindexering i Google Sök. Detta API är utformat för jobbannonswebbplatser för att meddela Google när jobb publiceras, uppdateras eller tas bort.',

        'enable' => 'Aktivera Google Indexing API',
        'enable_help' => 'När aktiverat kommer jobbannonser automatiskt att skickas till Google för snabbare indexering',

        'credentials_json' => 'Tjänstkontouppgifter (JSON)',
        'credentials_json_help' => 'Klistra in hela JSON-innehållet från din Google-tjänstkontonycelfil. Detta krypteras före lagring. Dela aldrig denna nyckel offentligt.',

        'credentials_configured' => 'Tjänstkontouppgifter är konfigurerade och giltiga.',
        'credentials_missing' => 'Inga uppgifter konfigurerade. Klistra in din Google-tjänstkontos JSON-nyckel nedan.',
        'credentials_invalid' => 'Ogiltigt uppgiftsformat. Se till att JSON innehåller fälten client_email och private_key.',

        'status' => 'Status & testning',
        'quota_used' => 'Kvot använd',
        'completed_today' => 'Slutfört idag',
        'pending' => 'Väntande',
        'failed' => 'Misslyckades',

        'test_connection' => 'Testa anslutning',
        'test_url' => 'Testa URL-inlämning',
        'submit' => 'Skicka',
        'testing' => 'Testar...',
        'submitting' => 'Skickar...',

        'not_enabled' => 'Google Indexing API är inte aktiverat. Aktivera det ovan och spara inställningarna först.',
        'connection_success' => 'Anslutning lyckades! Uppgifterna är giltiga.',
        'connection_failed' => 'Anslutning misslyckades. Kontrollera dina uppgifter.',
        'url_required' => 'Ange en URL att testa.',

        'quota_info' => 'Kvotinformation',
        'quota_daily' => 'Daglig gräns: 200 publiceringsförfrågningar (återställs vid midnatt UTC)',
        'quota_fallback' => 'När kvoten är slut köas URL:er och bearbetas automatiskt när kvoten återställs',

        'setup_instructions' => 'Installationsinstruktioner',
        'service_account_email' => 'Tjänstkontoets e-post',
        'search_console_setup' => 'Lägg till tjänstkonto i Google Search Console',
        'step_1' => 'Gå till Google Search Console och välj din egendom',
        'step_2' => 'Navigera till Inställningar → Användare och behörigheter',
        'step_3' => 'Klicka på knappen "Lägg till användare"',
        'step_4' => 'Klistra in tjänstkontoets e-post ovan och ställ in behörigheten till "Ägare"',
        'step_5' => 'Klicka på "Lägg till" för att spara',
        'open_search_console' => 'Öppna Search Console',
        'open_cloud_console' => 'Aktivera Indexing API',
    ],
];
