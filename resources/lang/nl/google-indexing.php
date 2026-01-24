<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Configureer de Google Indexing API voor snellere content-indexering in Google Zoeken. Deze API is ontworpen voor vacaturesites om Google te informeren wanneer vacatures worden gepubliceerd, bijgewerkt of verwijderd.',

        'enable' => 'Google Indexing API inschakelen',
        'enable_help' => 'Wanneer ingeschakeld, worden vacatures automatisch naar Google verzonden voor snellere indexering',

        'credentials_json' => 'Serviceaccount-referenties (JSON)',
        'credentials_json_help' => 'Plak de volledige JSON-inhoud van uw Google-serviceaccountsleutelbestand. Dit wordt versleuteld vóór opslag. Deel deze sleutel nooit openbaar.',

        'credentials_configured' => 'Serviceaccount-referenties zijn geconfigureerd en geldig.',
        'credentials_missing' => 'Geen referenties geconfigureerd. Plak hieronder uw Google-serviceaccount JSON-sleutel.',
        'credentials_invalid' => 'Ongeldig referentieformaat. Zorg ervoor dat de JSON de velden client_email en private_key bevat.',

        'status' => 'Status & testen',
        'quota_used' => 'Quotum gebruikt',
        'completed_today' => 'Vandaag voltooid',
        'pending' => 'In afwachting',
        'failed' => 'Mislukt',

        'test_connection' => 'Verbinding testen',
        'test_url' => 'URL-verzending testen',
        'submit' => 'Verzenden',
        'testing' => 'Testen...',
        'submitting' => 'Verzenden...',

        'not_enabled' => 'Google Indexing API is niet ingeschakeld. Schakel het hierboven in en sla eerst de instellingen op.',
        'connection_success' => 'Verbinding geslaagd! Referenties zijn geldig.',
        'connection_failed' => 'Verbinding mislukt. Controleer uw referenties.',
        'url_required' => 'Voer een URL in om te testen.',

        'quota_info' => 'Quotuminformatie',
        'quota_daily' => 'Dagelijkse limiet: 200 publicatieverzoeken (reset om middernacht UTC)',
        'quota_fallback' => 'Wanneer het quotum is uitgeput, worden URLs in de wachtrij geplaatst en automatisch verwerkt wanneer het quotum wordt gereset',

        'setup_instructions' => 'Installatie-instructies',
        'service_account_email' => 'Serviceaccount-e-mail',
        'search_console_setup' => 'Serviceaccount toevoegen aan Google Search Console',
        'step_1' => 'Ga naar Google Search Console en selecteer uw eigendom',
        'step_2' => 'Navigeer naar Instellingen → Gebruikers en machtigingen',
        'step_3' => 'Klik op de knop "Gebruiker toevoegen"',
        'step_4' => 'Plak de serviceaccount-e-mail hierboven en stel de machtiging in op "Eigenaar"',
        'step_5' => 'Klik op "Toevoegen" om op te slaan',
        'open_search_console' => 'Search Console openen',
        'open_cloud_console' => 'Indexing API inschakelen',
    ],
];
