<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurējiet Google Indexing API ātrākai satura indeksēšanai Google meklēšanā. Šis API ir paredzēts darba sludinājumu vietnēm, lai informētu Google, kad darba piedāvājumi tiek publicēti, atjaunināti vai noņemti.',

        'enable' => 'Iespējot Google Indexing API',
        'enable_help' => 'Kad iespējots, darba sludinājumi tiks automātiski nosūtīti Google ātrākai indeksēšanai',

        'credentials_json' => 'Pakalpojuma konta akreditācijas dati (JSON)',
        'credentials_json_help' => 'Ielīmējiet pilnu JSON saturu no jūsu Google pakalpojuma konta atslēgas faila. Tas tiks šifrēts pirms saglabāšanas. Nekad nekopīgojiet šo atslēgu publiski.',

        'credentials_configured' => 'Pakalpojuma konta akreditācijas dati ir konfigurēti un derīgi.',
        'credentials_missing' => 'Nav konfigurēti akreditācijas dati. Ielīmējiet savu Google pakalpojuma konta JSON atslēgu zemāk.',
        'credentials_invalid' => 'Nederīgs akreditācijas datu formāts. Pārliecinieties, ka JSON satur laukus client_email un private_key.',

        'status' => 'Statuss un testēšana',
        'quota_used' => 'Izmantotā kvota',
        'completed_today' => 'Šodien pabeigts',
        'pending' => 'Gaida',
        'failed' => 'Neizdevās',

        'test_connection' => 'Pārbaudīt savienojumu',
        'test_url' => 'Pārbaudīt URL iesniegšanu',
        'submit' => 'Iesniegt',
        'testing' => 'Pārbauda...',
        'submitting' => 'Iesniedz...',

        'not_enabled' => 'Google Indexing API nav iespējots. Iespējojiet to augstāk un vispirms saglabājiet iestatījumus.',
        'connection_success' => 'Savienojums veiksmīgs! Akreditācijas dati ir derīgi.',
        'connection_failed' => 'Savienojums neizdevās. Lūdzu, pārbaudiet savus akreditācijas datus.',
        'url_required' => 'Lūdzu, ievadiet URL pārbaudei.',

        'quota_info' => 'Kvotas informācija',
        'quota_daily' => 'Dienas limits: 200 publicēšanas pieprasījumi (atiestatās pusnaktī UTC)',
        'quota_fallback' => 'Kad kvota ir izsmelīa, URL tiek ievietoti rindā un automātiski apstrādāti, kad kvota tiek atiestatīta',

        'setup_instructions' => 'Iestatīšanas instrukcijas',
        'service_account_email' => 'Pakalpojuma konta e-pasts',
        'search_console_setup' => 'Pievienojiet pakalpojuma kontu Google Search Console',
        'step_1' => 'Dodieties uz Google Search Console un atlasiet savu īpašumu',
        'step_2' => 'Dodieties uz Iestatījumi → Lietotāji un atļaujas',
        'step_3' => 'Noklikšķiniet uz pogas "Pievienot lietotāju"',
        'step_4' => 'Ielīmējiet pakalpojuma konta e-pastu augstāk un iestatiet atļauju uz "Īpašnieks"',
        'step_5' => 'Noklikšķiniet "Pievienot", lai saglabātu',
        'open_search_console' => 'Atvērt Search Console',
        'open_cloud_console' => 'Iespējot Indexing API',
    ],
];
