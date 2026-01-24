<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurer Google Indexing API til hurtigere indeksering af indhold i Google Søgning. Denne API er designet til jobopslags-websites for at underrette Google, når jobs publiceres, opdateres eller fjernes.',

        'enable' => 'Aktiver Google Indexing API',
        'enable_help' => 'Når aktiveret, vil jobopslag automatisk blive sendt til Google for hurtigere indeksering',

        'credentials_json' => 'Tjenestekonto-legitimationsoplysninger (JSON)',
        'credentials_json_help' => 'Indsæt det fulde JSON-indhold fra din Google-tjenestekonto-nøglefil. Dette krypteres før lagring. Del aldrig denne nøgle offentligt.',

        'credentials_configured' => 'Tjenestekonto-legitimationsoplysninger er konfigureret og gyldige.',
        'credentials_missing' => 'Ingen legitimationsoplysninger konfigureret. Indsæt din Google-tjenestekonto JSON-nøgle nedenfor.',
        'credentials_invalid' => 'Ugyldigt legitimationsformat. Sørg for, at JSON indeholder felterne client_email og private_key.',

        'status' => 'Status & test',
        'quota_used' => 'Kvote brugt',
        'completed_today' => 'Fuldført i dag',
        'pending' => 'Afventer',
        'failed' => 'Mislykket',

        'test_connection' => 'Test forbindelse',
        'test_url' => 'Test URL-indsendelse',
        'submit' => 'Send',
        'testing' => 'Tester...',
        'submitting' => 'Sender...',

        'not_enabled' => 'Google Indexing API er ikke aktiveret. Aktiver det ovenfor og gem indstillingerne først.',
        'connection_success' => 'Forbindelse lykkedes! Legitimationsoplysninger er gyldige.',
        'connection_failed' => 'Forbindelse mislykkedes. Kontroller venligst dine legitimationsoplysninger.',
        'url_required' => 'Indtast venligst en URL at teste.',

        'quota_info' => 'Kvoteoplysninger',
        'quota_daily' => 'Daglig grænse: 200 publiceringsanmodninger (nulstilles ved midnat UTC)',
        'quota_fallback' => 'Når kvoten er opbrugt, sættes URL\'er i kø og behandles automatisk, når kvoten nulstilles',

        'setup_instructions' => 'Opsætningsinstruktioner',
        'service_account_email' => 'Tjenestekonto-e-mail',
        'search_console_setup' => 'Tilføj tjenestekonto til Google Search Console',
        'step_1' => 'Gå til Google Search Console og vælg din ejendom',
        'step_2' => 'Naviger til Indstillinger → Brugere og tilladelser',
        'step_3' => 'Klik på knappen "Tilføj bruger"',
        'step_4' => 'Indsæt tjenestekonto-e-mailen ovenfor og sæt tilladelsen til "Ejer"',
        'step_5' => 'Klik på "Tilføj" for at gemme',
        'open_search_console' => 'Åbn Search Console',
        'open_cloud_console' => 'Aktiver Indexing API',
    ],
];
