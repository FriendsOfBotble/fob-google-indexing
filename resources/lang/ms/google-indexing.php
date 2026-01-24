<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurasikan Google Indexing API untuk pengindeksan kandungan yang lebih pantas dalam Carian Google. API ini direka untuk laman web iklan pekerjaan untuk memberitahu Google apabila pekerjaan diterbitkan, dikemas kini atau dibuang.',

        'enable' => 'Dayakan Google Indexing API',
        'enable_help' => 'Apabila didayakan, iklan pekerjaan akan dihantar secara automatik ke Google untuk pengindeksan yang lebih pantas',

        'credentials_json' => 'Kelayakan Akaun Perkhidmatan (JSON)',
        'credentials_json_help' => 'Tampal kandungan JSON penuh dari fail kunci akaun perkhidmatan Google anda. Ini akan disulitkan sebelum penyimpanan. Jangan sesekali berkongsi kunci ini secara awam.',

        'credentials_configured' => 'Kelayakan akaun perkhidmatan telah dikonfigurasikan dan sah.',
        'credentials_missing' => 'Tiada kelayakan dikonfigurasikan. Tampal kunci JSON akaun perkhidmatan Google anda di bawah.',
        'credentials_invalid' => 'Format kelayakan tidak sah. Pastikan JSON mengandungi medan client_email dan private_key.',

        'status' => 'Status & Ujian',
        'quota_used' => 'Kuota Digunakan',
        'completed_today' => 'Selesai Hari Ini',
        'pending' => 'Menunggu',
        'failed' => 'Gagal',

        'test_connection' => 'Uji Sambungan',
        'test_url' => 'Uji Penghantaran URL',
        'submit' => 'Hantar',
        'testing' => 'Menguji...',
        'submitting' => 'Menghantar...',

        'not_enabled' => 'Google Indexing API tidak didayakan. Dayakan di atas dan simpan tetapan terlebih dahulu.',
        'connection_success' => 'Sambungan berjaya! Kelayakan adalah sah.',
        'connection_failed' => 'Sambungan gagal. Sila semak kelayakan anda.',
        'url_required' => 'Sila masukkan URL untuk diuji.',

        'quota_info' => 'Maklumat Kuota',
        'quota_daily' => 'Had harian: 200 permintaan penerbitan (ditetapkan semula pada tengah malam UTC)',
        'quota_fallback' => 'Apabila kuota habis, URL akan dimasukkan dalam baris gilir dan diproses secara automatik apabila kuota ditetapkan semula',

        'setup_instructions' => 'Arahan Persediaan',
        'service_account_email' => 'E-mel Akaun Perkhidmatan',
        'search_console_setup' => 'Tambah Akaun Perkhidmatan ke Google Search Console',
        'step_1' => 'Pergi ke Google Search Console dan pilih hartanah anda',
        'step_2' => 'Navigasi ke Tetapan → Pengguna dan kebenaran',
        'step_3' => 'Klik butang "Tambah pengguna"',
        'step_4' => 'Tampal E-mel Akaun Perkhidmatan di atas dan tetapkan kebenaran kepada "Pemilik"',
        'step_5' => 'Klik "Tambah" untuk menyimpan',
        'open_search_console' => 'Buka Search Console',
        'open_cloud_console' => 'Dayakan Indexing API',
    ],
];
