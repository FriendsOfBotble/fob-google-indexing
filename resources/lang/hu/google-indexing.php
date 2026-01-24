<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurálja a Google Indexing API-t a gyorsabb tartalomindexeléshez a Google Keresésben. Ez az API állásajánlat-weboldalakhoz készült, hogy értesítse a Google-t, amikor állások kerülnek közzétételre, frissítésre vagy törlésre.',

        'enable' => 'Google Indexing API engedélyezése',
        'enable_help' => 'Ha engedélyezve van, az állásajánlatok automatikusan elküldésre kerülnek a Google-nak a gyorsabb indexelés érdekében',

        'credentials_json' => 'Szolgáltatásfiók hitelesítő adatok (JSON)',
        'credentials_json_help' => 'Illessze be a teljes JSON-tartalmat a Google szolgáltatásfiók kulcsfájljából. Ez titkosítva lesz tárolás előtt. Soha ne ossza meg nyilvánosan ezt a kulcsot.',

        'credentials_configured' => 'A szolgáltatásfiók hitelesítő adatai konfigurálva vannak és érvényesek.',
        'credentials_missing' => 'Nincs konfigurált hitelesítő adat. Illessze be alább a Google szolgáltatásfiók JSON-kulcsát.',
        'credentials_invalid' => 'Érvénytelen hitelesítő adat formátum. Győződjön meg arról, hogy a JSON tartalmazza a client_email és private_key mezőket.',

        'status' => 'Állapot és tesztelés',
        'quota_used' => 'Felhasznált kvóta',
        'completed_today' => 'Ma befejezett',
        'pending' => 'Függőben',
        'failed' => 'Sikertelen',

        'test_connection' => 'Kapcsolat tesztelése',
        'test_url' => 'URL beküldés tesztelése',
        'submit' => 'Küldés',
        'testing' => 'Tesztelés...',
        'submitting' => 'Küldés...',

        'not_enabled' => 'A Google Indexing API nincs engedélyezve. Engedélyezze fent és először mentse el a beállításokat.',
        'connection_success' => 'Sikeres kapcsolat! A hitelesítő adatok érvényesek.',
        'connection_failed' => 'A kapcsolat sikertelen. Kérjük, ellenőrizze a hitelesítő adatait.',
        'url_required' => 'Kérjük, adjon meg egy URL-t a teszteléshez.',

        'quota_info' => 'Kvóta információ',
        'quota_daily' => 'Napi limit: 200 közzétételi kérelem (éjfélkor UTC-ben visszaáll)',
        'quota_fallback' => 'Amikor a kvóta kimerül, az URL-ek sorba kerülnek és automatikusan feldolgozásra kerülnek, amikor a kvóta visszaáll',

        'setup_instructions' => 'Beállítási utasítások',
        'service_account_email' => 'Szolgáltatásfiók e-mail',
        'search_console_setup' => 'Szolgáltatásfiók hozzáadása a Google Search Console-hoz',
        'step_1' => 'Nyissa meg a Google Search Console-t és válassza ki a tulajdonát',
        'step_2' => 'Navigáljon a Beállítások → Felhasználók és engedélyek menüponthoz',
        'step_3' => 'Kattintson a "Felhasználó hozzáadása" gombra',
        'step_4' => 'Illessze be a fenti szolgáltatásfiók e-mailt és állítsa az engedélyt "Tulajdonos"-ra',
        'step_5' => 'Kattintson a "Hozzáadás" gombra a mentéshez',
        'open_search_console' => 'Search Console megnyitása',
        'open_cloud_console' => 'Indexing API engedélyezése',
    ],
];
