<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurer Google Indexing API for raskere innholdsindeksering i Google Søk. Dette API-et er designet for stillingsannonse-nettsteder for å varsle Google når stillinger publiseres, oppdateres eller fjernes.',

        'enable' => 'Aktiver Google Indexing API',
        'enable_help' => 'Når aktivert, vil stillingsannonser automatisk sendes til Google for raskere indeksering',

        'credentials_json' => 'Tjenestekontolegitimasjon (JSON)',
        'credentials_json_help' => 'Lim inn hele JSON-innholdet fra Google-tjenestekonto-nøkkelfilen din. Dette krypteres før lagring. Del aldri denne nøkkelen offentlig.',

        'credentials_configured' => 'Tjenestekontolegitimasjon er konfigurert og gyldig.',
        'credentials_missing' => 'Ingen legitimasjon konfigurert. Lim inn Google-tjenestekonto JSON-nøkkelen din nedenfor.',
        'credentials_invalid' => 'Ugyldig legitimasjonsformat. Sørg for at JSON inneholder feltene client_email og private_key.',

        'status' => 'Status og testing',
        'quota_used' => 'Kvote brukt',
        'completed_today' => 'Fullført i dag',
        'pending' => 'Venter',
        'failed' => 'Mislyktes',

        'test_connection' => 'Test tilkobling',
        'test_url' => 'Test URL-innsending',
        'submit' => 'Send',
        'testing' => 'Tester...',
        'submitting' => 'Sender...',

        'not_enabled' => 'Google Indexing API er ikke aktivert. Aktiver det ovenfor og lagre innstillingene først.',
        'connection_success' => 'Tilkobling vellykket! Legitimasjonen er gyldig.',
        'connection_failed' => 'Tilkobling mislyktes. Vennligst sjekk legitimasjonen din.',
        'url_required' => 'Vennligst skriv inn en URL å teste.',

        'quota_info' => 'Kvoteinformasjon',
        'quota_daily' => 'Daglig grense: 200 publiseringsforespørsler (tilbakestilles ved midnatt UTC)',
        'quota_fallback' => 'Når kvoten er oppbrukt, settes URL-er i kø og behandles automatisk når kvoten tilbakestilles',

        'setup_instructions' => 'Oppsettinstruksjoner',
        'service_account_email' => 'Tjenestekonto-e-post',
        'search_console_setup' => 'Legg til tjenestekonto i Google Search Console',
        'step_1' => 'Gå til Google Search Console og velg din eiendom',
        'step_2' => 'Naviger til Innstillinger → Brukere og tillatelser',
        'step_3' => 'Klikk på "Legg til bruker"-knappen',
        'step_4' => 'Lim inn tjenestekonto-e-posten ovenfor og sett tillatelsen til "Eier"',
        'step_5' => 'Klikk "Legg til" for å lagre',
        'open_search_console' => 'Åpne Search Console',
        'open_cloud_console' => 'Aktiver Indexing API',
    ],
];
