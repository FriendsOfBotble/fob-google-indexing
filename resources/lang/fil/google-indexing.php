<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'I-configure ang Google Indexing API para sa mas mabilis na pag-index ng nilalaman sa Google Search. Ang API na ito ay dinisenyo para sa mga website ng mga trabaho upang abisuhan ang Google kapag ang mga trabaho ay na-publish, na-update, o tinanggal.',

        'enable' => 'I-enable ang Google Indexing API',
        'enable_help' => 'Kapag na-enable, ang mga job posting ay awtomatikong isusumite sa Google para sa mas mabilis na pag-index',

        'credentials_json' => 'Mga Kredensyal ng Service Account (JSON)',
        'credentials_json_help' => 'I-paste ang buong JSON content mula sa iyong Google service account key file. Ito ay ie-encrypt bago i-store. Huwag kailanman ibahagi ang key na ito sa publiko.',

        'credentials_configured' => 'Ang mga kredensyal ng service account ay na-configure at valid.',
        'credentials_missing' => 'Walang na-configure na kredensyal. I-paste ang iyong Google service account JSON key sa ibaba.',
        'credentials_invalid' => 'Invalid na format ng kredensyal. Siguraduhing naglalaman ang JSON ng mga field na client_email at private_key.',

        'status' => 'Status at Pagsubok',
        'quota_used' => 'Ginamit na Quota',
        'completed_today' => 'Nakumpleto Ngayon',
        'pending' => 'Naghihintay',
        'failed' => 'Nabigo',

        'test_connection' => 'Subukan ang Koneksyon',
        'test_url' => 'Subukan ang URL Submission',
        'submit' => 'Isumite',
        'testing' => 'Sinusubukan...',
        'submitting' => 'Isinusumite...',

        'not_enabled' => 'Hindi na-enable ang Google Indexing API. I-enable ito sa itaas at i-save muna ang mga setting.',
        'connection_success' => 'Matagumpay ang koneksyon! Valid ang mga kredensyal.',
        'connection_failed' => 'Nabigo ang koneksyon. Pakisuri ang iyong mga kredensyal.',
        'url_required' => 'Pakilagay ang isang URL para subukan.',

        'quota_info' => 'Impormasyon ng Quota',
        'quota_daily' => 'Araw-araw na limit: 200 publish request (nire-reset sa hatinggabi UTC)',
        'quota_fallback' => 'Kapag naubos ang quota, ang mga URL ay inilalagay sa queue at awtomatikong pinoproseso kapag nire-reset ang quota',

        'setup_instructions' => 'Mga Tagubilin sa Pag-setup',
        'service_account_email' => 'Email ng Service Account',
        'search_console_setup' => 'Idagdag ang Service Account sa Google Search Console',
        'step_1' => 'Pumunta sa Google Search Console at piliin ang iyong property',
        'step_2' => 'Pumunta sa Settings → Users and permissions',
        'step_3' => 'I-click ang "Add user" button',
        'step_4' => 'I-paste ang Service Account Email sa itaas at itakda ang permission sa "Owner"',
        'step_5' => 'I-click ang "Add" para i-save',
        'open_search_console' => 'Buksan ang Search Console',
        'open_cloud_console' => 'I-enable ang Indexing API',
    ],
];
