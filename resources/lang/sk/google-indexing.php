<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Nakonfigurujte Google Indexing API pre rýchlejšie indexovanie obsahu vo Vyhľadávaní Google. Toto API je navrhnuté pre weby s pracovnými ponukami na upozornenie Google, keď sú pracovné pozície publikované, aktualizované alebo odstránené.',

        'enable' => 'Povoliť Google Indexing API',
        'enable_help' => 'Keď je povolené, pracovné ponuky budú automaticky odoslané do Google pre rýchlejšie indexovanie',

        'credentials_json' => 'Prihlasovacie údaje servisného účtu (JSON)',
        'credentials_json_help' => 'Vložte úplný obsah JSON zo súboru kľúča servisného účtu Google. Toto bude pred uložením zašifrované. Nikdy tento kľúč nezdieľajte verejne.',

        'credentials_configured' => 'Prihlasovacie údaje servisného účtu sú nakonfigurované a platné.',
        'credentials_missing' => 'Žiadne prihlasovacie údaje nie sú nakonfigurované. Vložte nižšie kľúč JSON servisného účtu Google.',
        'credentials_invalid' => 'Neplatný formát prihlasovacích údajov. Uistite sa, že JSON obsahuje polia client_email a private_key.',

        'status' => 'Stav a testovanie',
        'quota_used' => 'Využitá kvóta',
        'completed_today' => 'Dokončené dnes',
        'pending' => 'Čaká',
        'failed' => 'Neúspešné',

        'test_connection' => 'Testovať pripojenie',
        'test_url' => 'Testovať odoslanie URL',
        'submit' => 'Odoslať',
        'testing' => 'Testovanie...',
        'submitting' => 'Odosielanie...',

        'not_enabled' => 'Google Indexing API nie je povolené. Povoľte ho vyššie a najprv uložte nastavenia.',
        'connection_success' => 'Pripojenie úspešné! Prihlasovacie údaje sú platné.',
        'connection_failed' => 'Pripojenie zlyhalo. Skontrolujte prosím svoje prihlasovacie údaje.',
        'url_required' => 'Zadajte prosím URL na testovanie.',

        'quota_info' => 'Informácie o kvóte',
        'quota_daily' => 'Denný limit: 200 požiadaviek na publikovanie (obnovuje sa o polnoci UTC)',
        'quota_fallback' => 'Keď je kvóta vyčerpaná, URL sú zaradené do fronty a spracované automaticky po obnovení kvóty',

        'setup_instructions' => 'Pokyny na nastavenie',
        'service_account_email' => 'E-mail servisného účtu',
        'search_console_setup' => 'Pridať servisný účet do Google Search Console',
        'step_1' => 'Prejdite do Google Search Console a vyberte svoju službu',
        'step_2' => 'Prejdite do Nastavenia → Používatelia a oprávnenia',
        'step_3' => 'Kliknite na tlačidlo "Pridať používateľa"',
        'step_4' => 'Vložte e-mail servisného účtu vyššie a nastavte oprávnenie na "Vlastník"',
        'step_5' => 'Kliknite na "Pridať" pre uloženie',
        'open_search_console' => 'Otvoriť Search Console',
        'open_cloud_console' => 'Povoliť Indexing API',
    ],
];
