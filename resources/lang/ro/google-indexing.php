<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Configurați Google Indexing API pentru indexarea mai rapidă a conținutului în Căutarea Google. Această API este concepută pentru site-urile de locuri de muncă pentru a notifica Google când sunt publicate, actualizate sau eliminate locuri de muncă.',

        'enable' => 'Activați Google Indexing API',
        'enable_help' => 'Când este activat, anunțurile de locuri de muncă vor fi trimise automat la Google pentru indexare mai rapidă',

        'credentials_json' => 'Acreditări cont de serviciu (JSON)',
        'credentials_json_help' => 'Lipiți conținutul JSON complet din fișierul cheie al contului de serviciu Google. Acesta va fi criptat înainte de stocare. Nu partajați niciodată această cheie public.',

        'credentials_configured' => 'Acreditările contului de serviciu sunt configurate și valide.',
        'credentials_missing' => 'Nicio acreditare configurată. Lipiți cheia JSON a contului de serviciu Google mai jos.',
        'credentials_invalid' => 'Format de acreditări invalid. Asigurați-vă că JSON conține câmpurile client_email și private_key.',

        'status' => 'Stare și testare',
        'quota_used' => 'Cotă utilizată',
        'completed_today' => 'Finalizat astăzi',
        'pending' => 'În așteptare',
        'failed' => 'Eșuat',

        'test_connection' => 'Testați conexiunea',
        'test_url' => 'Testați trimiterea URL',
        'submit' => 'Trimiteți',
        'testing' => 'Se testează...',
        'submitting' => 'Se trimite...',

        'not_enabled' => 'Google Indexing API nu este activat. Activați-l mai sus și salvați mai întâi setările.',
        'connection_success' => 'Conexiune reușită! Acreditările sunt valide.',
        'connection_failed' => 'Conexiunea a eșuat. Vă rugăm să verificați acreditările.',
        'url_required' => 'Vă rugăm să introduceți un URL pentru testare.',

        'quota_info' => 'Informații despre cotă',
        'quota_daily' => 'Limită zilnică: 200 cereri de publicare (se resetează la miezul nopții UTC)',
        'quota_fallback' => 'Când cota este epuizată, URL-urile sunt puse în coadă și procesate automat când cota se resetează',

        'setup_instructions' => 'Instrucțiuni de configurare',
        'service_account_email' => 'Email cont de serviciu',
        'search_console_setup' => 'Adăugați contul de serviciu la Google Search Console',
        'step_1' => 'Accesați Google Search Console și selectați proprietatea dvs.',
        'step_2' => 'Navigați la Setări → Utilizatori și permisiuni',
        'step_3' => 'Faceți clic pe butonul "Adăugați utilizator"',
        'step_4' => 'Lipiți emailul contului de serviciu de mai sus și setați permisiunea la "Proprietar"',
        'step_5' => 'Faceți clic pe "Adăugați" pentru a salva',
        'open_search_console' => 'Deschideți Search Console',
        'open_cloud_console' => 'Activați Indexing API',
    ],
];
