<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Seadistage Google Indexing API sisu kiiremaks indekseerimiseks Google otsingus. See API on mõeldud tööpakkumiste veebilehtedele, et teavitada Google\'it, kui tööpakkumised avaldatakse, uuendatakse või eemaldatakse.',

        'enable' => 'Luba Google Indexing API',
        'enable_help' => 'Kui lubatud, saadetakse tööpakkumised automaatselt Google\'ile kiiremaks indekseerimiseks',

        'credentials_json' => 'Teenusekonto mandaadid (JSON)',
        'credentials_json_help' => 'Kleepige oma Google teenusekonto võtmefaili täielik JSON-sisu. See krüpteeritakse enne salvestamist. Ärge kunagi jagage seda võtit avalikult.',

        'credentials_configured' => 'Teenusekonto mandaadid on seadistatud ja kehtivad.',
        'credentials_missing' => 'Mandaate pole seadistatud. Kleepige oma Google teenusekonto JSON-võti allpool.',
        'credentials_invalid' => 'Vigane mandaatide vorming. Veenduge, et JSON sisaldab välju client_email ja private_key.',

        'status' => 'Olek ja testimine',
        'quota_used' => 'Kasutatud kvoot',
        'completed_today' => 'Täna lõpetatud',
        'pending' => 'Ootel',
        'failed' => 'Ebaõnnestunud',

        'test_connection' => 'Testi ühendust',
        'test_url' => 'Testi URL-i esitamist',
        'submit' => 'Esita',
        'testing' => 'Testimine...',
        'submitting' => 'Esitamine...',

        'not_enabled' => 'Google Indexing API pole lubatud. Lubage see ülal ja salvestage kõigepealt seaded.',
        'connection_success' => 'Ühendus õnnestus! Mandaadid on kehtivad.',
        'connection_failed' => 'Ühendus ebaõnnestus. Palun kontrollige oma mandaate.',
        'url_required' => 'Palun sisestage testimiseks URL.',

        'quota_info' => 'Kvoodi teave',
        'quota_daily' => 'Päevane limiit: 200 avaldamisepäringut (lähtestatakse keskööl UTC)',
        'quota_fallback' => 'Kui kvoot on ammendatud, pannakse URL-id järjekorda ja töödeldakse automaatselt, kui kvoot lähtestatakse',

        'setup_instructions' => 'Seadistamisjuhised',
        'service_account_email' => 'Teenusekonto e-post',
        'search_console_setup' => 'Lisage teenusekonto Google Search Console\'i',
        'step_1' => 'Minge Google Search Console\'i ja valige oma atribuut',
        'step_2' => 'Navigeerige jaotisse Seaded → Kasutajad ja õigused',
        'step_3' => 'Klõpsake nuppu "Lisa kasutaja"',
        'step_4' => 'Kleepige ülaltoodud teenusekonto e-post ja määrake õiguseks "Omanik"',
        'step_5' => 'Klõpsake salvestamiseks "Lisa"',
        'open_search_console' => 'Ava Search Console',
        'open_cloud_console' => 'Luba Indexing API',
    ],
];
