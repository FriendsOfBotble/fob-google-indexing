<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurirajte Google Indexing API za hitrejše indeksiranje vsebine v Google Iskanju. Ta API je zasnovan za spletna mesta z zaposlitvami, da obvestijo Google, ko so delovna mesta objavljena, posodobljena ali odstranjena.',

        'enable' => 'Omogoči Google Indexing API',
        'enable_help' => 'Ko je omogočeno, bodo objave delovnih mest samodejno poslane Googlu za hitrejše indeksiranje',

        'credentials_json' => 'Poverilnice storitvenega računa (JSON)',
        'credentials_json_help' => 'Prilepite celotno vsebino JSON iz datoteke ključa storitvenega računa Google. To bo šifrirano pred shranjevanjem. Nikoli ne delite tega ključa javno.',

        'credentials_configured' => 'Poverilnice storitvenega računa so konfigurirane in veljavne.',
        'credentials_missing' => 'Nobena poverilnica ni konfigurirana. Spodaj prilepite JSON ključ storitvenega računa Google.',
        'credentials_invalid' => 'Neveljavna oblika poverilnic. Prepričajte se, da JSON vsebuje polji client_email in private_key.',

        'status' => 'Stanje in testiranje',
        'quota_used' => 'Uporabljena kvota',
        'completed_today' => 'Dokončano danes',
        'pending' => 'V čakanju',
        'failed' => 'Neuspešno',

        'test_connection' => 'Testiraj povezavo',
        'test_url' => 'Testiraj oddajo URL',
        'submit' => 'Oddaj',
        'testing' => 'Testiranje...',
        'submitting' => 'Oddajanje...',

        'not_enabled' => 'Google Indexing API ni omogočen. Omogočite ga zgoraj in najprej shranite nastavitve.',
        'connection_success' => 'Povezava uspešna! Poverilnice so veljavne.',
        'connection_failed' => 'Povezava neuspešna. Preverite svoje poverilnice.',
        'url_required' => 'Vnesite URL za testiranje.',

        'quota_info' => 'Informacije o kvoti',
        'quota_daily' => 'Dnevna omejitev: 200 zahtev za objavo (ponastavi se ob polnoči UTC)',
        'quota_fallback' => 'Ko je kvota izčrpana, so URL-ji postavljeni v čakalno vrsto in samodejno obdelani, ko se kvota ponastavi',

        'setup_instructions' => 'Navodila za nastavitev',
        'service_account_email' => 'E-pošta storitvenega računa',
        'search_console_setup' => 'Dodajte storitveni račun v Google Search Console',
        'step_1' => 'Pojdite v Google Search Console in izberite svojo lastnino',
        'step_2' => 'Pojdite na Nastavitve → Uporabniki in dovoljenja',
        'step_3' => 'Kliknite gumb "Dodaj uporabnika"',
        'step_4' => 'Prilepite e-pošto storitvenega računa zgoraj in nastavite dovoljenje na "Lastnik"',
        'step_5' => 'Kliknite "Dodaj" za shranjevanje',
        'open_search_console' => 'Odpri Search Console',
        'open_cloud_console' => 'Omogoči Indexing API',
    ],
];
