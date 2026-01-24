<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Konfigurasi Google Indexing API untuk pengindeksan konten yang lebih cepat di Google Search. API ini dirancang untuk situs lowongan kerja untuk memberi tahu Google saat lowongan dipublikasikan, diperbarui, atau dihapus.',

        'enable' => 'Aktifkan Google Indexing API',
        'enable_help' => 'Saat diaktifkan, lowongan kerja akan otomatis dikirim ke Google untuk pengindeksan yang lebih cepat',

        'credentials_json' => 'Kredensial Akun Layanan (JSON)',
        'credentials_json_help' => 'Tempel konten JSON lengkap dari file kunci akun layanan Google Anda. Ini akan dienkripsi sebelum disimpan. Jangan pernah membagikan kunci ini secara publik.',

        'credentials_configured' => 'Kredensial akun layanan telah dikonfigurasi dan valid.',
        'credentials_missing' => 'Tidak ada kredensial yang dikonfigurasi. Tempel kunci JSON akun layanan Google Anda di bawah.',
        'credentials_invalid' => 'Format kredensial tidak valid. Pastikan JSON berisi field client_email dan private_key.',

        'status' => 'Status & Pengujian',
        'quota_used' => 'Kuota Terpakai',
        'completed_today' => 'Selesai Hari Ini',
        'pending' => 'Tertunda',
        'failed' => 'Gagal',

        'test_connection' => 'Uji Koneksi',
        'test_url' => 'Uji Pengiriman URL',
        'submit' => 'Kirim',
        'testing' => 'Menguji...',
        'submitting' => 'Mengirim...',

        'not_enabled' => 'Google Indexing API tidak diaktifkan. Aktifkan di atas dan simpan pengaturan terlebih dahulu.',
        'connection_success' => 'Koneksi berhasil! Kredensial valid.',
        'connection_failed' => 'Koneksi gagal. Silakan periksa kredensial Anda.',
        'url_required' => 'Silakan masukkan URL untuk diuji.',

        'quota_info' => 'Informasi Kuota',
        'quota_daily' => 'Batas harian: 200 permintaan publikasi (reset pada tengah malam UTC)',
        'quota_fallback' => 'Saat kuota habis, URL akan diantrekan dan diproses secara otomatis saat kuota direset',

        'setup_instructions' => 'Petunjuk Pengaturan',
        'service_account_email' => 'Email Akun Layanan',
        'search_console_setup' => 'Tambahkan Akun Layanan ke Google Search Console',
        'step_1' => 'Buka Google Search Console dan pilih properti Anda',
        'step_2' => 'Navigasi ke Pengaturan → Pengguna dan izin',
        'step_3' => 'Klik tombol "Tambahkan pengguna"',
        'step_4' => 'Tempel Email Akun Layanan di atas dan atur izin ke "Pemilik"',
        'step_5' => 'Klik "Tambahkan" untuk menyimpan',
        'open_search_console' => 'Buka Search Console',
        'open_cloud_console' => 'Aktifkan Indexing API',
    ],
];
