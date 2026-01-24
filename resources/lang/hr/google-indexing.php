<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurirajte Google Indexing API za brže indeksiranje sadržaja u Google pretraživanju. Ovaj API je dizajniran za web stranice s oglasima za posao kako bi obavijestile Google kada su poslovi objavljeni, ažurirani ili uklonjeni.',

        'enable' => 'Omogući Google Indexing API',
        'enable_help' => 'Kada je omogućeno, oglasi za posao automatski će se slati Googleu radi bržeg indeksiranja',

        'credentials_json' => 'Vjerodajnice servisnog računa (JSON)',
        'credentials_json_help' => 'Zalijepite puni JSON sadržaj iz datoteke ključa servisnog računa Google. Ovo će biti šifrirano prije pohrane. Nikada ne dijelite ovaj ključ javno.',

        'credentials_configured' => 'Vjerodajnice servisnog računa su konfigurirane i valjane.',
        'credentials_missing' => 'Nema konfiguriranih vjerodajnica. Zalijepite svoj Google servisni račun JSON ključ ispod.',
        'credentials_invalid' => 'Nevažeći format vjerodajnica. Provjerite sadrži li JSON polja client_email i private_key.',

        'status' => 'Status i testiranje',
        'quota_used' => 'Iskorištena kvota',
        'completed_today' => 'Dovršeno danas',
        'pending' => 'Na čekanju',
        'failed' => 'Neuspjelo',

        'test_connection' => 'Testiraj vezu',
        'test_url' => 'Testiraj slanje URL-a',
        'submit' => 'Pošalji',
        'testing' => 'Testiranje...',
        'submitting' => 'Slanje...',

        'not_enabled' => 'Google Indexing API nije omogućen. Omogućite ga gore i prvo spremite postavke.',
        'connection_success' => 'Veza uspješna! Vjerodajnice su valjane.',
        'connection_failed' => 'Veza neuspješna. Molimo provjerite svoje vjerodajnice.',
        'url_required' => 'Molimo unesite URL za testiranje.',

        'quota_info' => 'Informacije o kvoti',
        'quota_daily' => 'Dnevni limit: 200 zahtjeva za objavu (resetira se u ponoć UTC)',
        'quota_fallback' => 'Kada je kvota iscrpljena, URL-ovi se stavljaju u red čekanja i automatski se obrađuju kada se kvota resetira',

        'setup_instructions' => 'Upute za postavljanje',
        'service_account_email' => 'E-mail servisnog računa',
        'search_console_setup' => 'Dodajte servisni račun u Google Search Console',
        'step_1' => 'Idite na Google Search Console i odaberite svoju nekretninu',
        'step_2' => 'Idite na Postavke → Korisnici i dozvole',
        'step_3' => 'Kliknite gumb "Dodaj korisnika"',
        'step_4' => 'Zalijepite e-mail servisnog računa gore i postavite dozvolu na "Vlasnik"',
        'step_5' => 'Kliknite "Dodaj" za spremanje',
        'open_search_console' => 'Otvori Search Console',
        'open_cloud_console' => 'Omogući Indexing API',
    ],
];
