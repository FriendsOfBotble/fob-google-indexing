<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Nakonfigurujte Google Indexing API pro rychlejší indexování obsahu ve Vyhledávání Google. Toto API je navrženo pro weby s pracovními nabídkami k upozornění Google, když jsou pracovní pozice publikovány, aktualizovány nebo odstraněny.',

        'enable' => 'Povolit Google Indexing API',
        'enable_help' => 'Když je povoleno, pracovní nabídky budou automaticky odeslány do Google pro rychlejší indexování',

        'credentials_json' => 'Přihlašovací údaje servisního účtu (JSON)',
        'credentials_json_help' => 'Vložte úplný obsah JSON ze souboru klíče servisního účtu Google. Toto bude před uložením zašifrováno. Nikdy tento klíč nesdílejte veřejně.',

        'credentials_configured' => 'Přihlašovací údaje servisního účtu jsou nakonfigurovány a platné.',
        'credentials_missing' => 'Žádné přihlašovací údaje nejsou nakonfigurovány. Vložte níže klíč JSON servisního účtu Google.',
        'credentials_invalid' => 'Neplatný formát přihlašovacích údajů. Ujistěte se, že JSON obsahuje pole client_email a private_key.',

        'status' => 'Stav a testování',
        'quota_used' => 'Využitá kvóta',
        'completed_today' => 'Dokončeno dnes',
        'pending' => 'Čeká',
        'failed' => 'Neúspěšné',

        'test_connection' => 'Testovat připojení',
        'test_url' => 'Testovat odeslání URL',
        'submit' => 'Odeslat',
        'testing' => 'Testování...',
        'submitting' => 'Odesílání...',

        'not_enabled' => 'Google Indexing API není povoleno. Povolte ho výše a nejprve uložte nastavení.',
        'connection_success' => 'Připojení úspěšné! Přihlašovací údaje jsou platné.',
        'connection_failed' => 'Připojení selhalo. Zkontrolujte prosím své přihlašovací údaje.',
        'url_required' => 'Zadejte prosím URL k testování.',

        'quota_info' => 'Informace o kvótě',
        'quota_daily' => 'Denní limit: 200 požadavků na publikování (obnovuje se o půlnoci UTC)',
        'quota_fallback' => 'Když je kvóta vyčerpána, URL jsou zařazeny do fronty a zpracovány automaticky po obnovení kvóty',

        'setup_instructions' => 'Pokyny k nastavení',
        'service_account_email' => 'E-mail servisního účtu',
        'search_console_setup' => 'Přidat servisní účet do Google Search Console',
        'step_1' => 'Přejděte do Google Search Console a vyberte svůj web',
        'step_2' => 'Přejděte do Nastavení → Uživatelé a oprávnění',
        'step_3' => 'Klikněte na tlačítko "Přidat uživatele"',
        'step_4' => 'Vložte e-mail servisního účtu výše a nastavte oprávnění na "Vlastník"',
        'step_5' => 'Klikněte na "Přidat" pro uložení',
        'open_search_console' => 'Otevřít Search Console',
        'open_cloud_console' => 'Povolit Indexing API',
    ],
];
