<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Google Arama\'da daha hızlı içerik dizinleme için Google Indexing API\'yi yapılandırın. Bu API, iş ilanı web siteleri için tasarlanmıştır ve iş ilanları yayınlandığında, güncellendiğinde veya kaldırıldığında Google\'ı bilgilendirir.',

        'enable' => 'Google Indexing API\'yi Etkinleştir',
        'enable_help' => 'Etkinleştirildiğinde, iş ilanları daha hızlı dizinleme için otomatik olarak Google\'a gönderilir',

        'credentials_json' => 'Hizmet Hesabı Kimlik Bilgileri (JSON)',
        'credentials_json_help' => 'Google hizmet hesabı anahtar dosyanızdan tam JSON içeriğini yapıştırın. Bu, depolamadan önce şifrelenecektir. Bu anahtarı asla herkese açık olarak paylaşmayın.',

        'credentials_configured' => 'Hizmet hesabı kimlik bilgileri yapılandırıldı ve geçerli.',
        'credentials_missing' => 'Kimlik bilgisi yapılandırılmadı. Aşağıya Google hizmet hesabı JSON anahtarınızı yapıştırın.',
        'credentials_invalid' => 'Geçersiz kimlik bilgisi formatı. JSON\'un client_email ve private_key alanlarını içerdiğinden emin olun.',

        'status' => 'Durum ve Test',
        'quota_used' => 'Kullanılan Kota',
        'completed_today' => 'Bugün Tamamlanan',
        'pending' => 'Beklemede',
        'failed' => 'Başarısız',

        'test_connection' => 'Bağlantıyı Test Et',
        'test_url' => 'URL Gönderimini Test Et',
        'submit' => 'Gönder',
        'testing' => 'Test ediliyor...',
        'submitting' => 'Gönderiliyor...',

        'not_enabled' => 'Google Indexing API etkin değil. Yukarıdan etkinleştirin ve önce ayarları kaydedin.',
        'connection_success' => 'Bağlantı başarılı! Kimlik bilgileri geçerli.',
        'connection_failed' => 'Bağlantı başarısız. Lütfen kimlik bilgilerinizi kontrol edin.',
        'url_required' => 'Lütfen test etmek için bir URL girin.',

        'quota_info' => 'Kota Bilgisi',
        'quota_daily' => 'Günlük limit: 200 yayın isteği (UTC gece yarısı sıfırlanır)',
        'quota_fallback' => 'Kota tükendiğinde, URL\'ler sıraya alınır ve kota sıfırlandığında otomatik olarak işlenir',

        'setup_instructions' => 'Kurulum Talimatları',
        'service_account_email' => 'Hizmet Hesabı E-postası',
        'search_console_setup' => 'Hizmet Hesabını Google Search Console\'a Ekle',
        'step_1' => 'Google Search Console\'a gidin ve mülkünüzü seçin',
        'step_2' => 'Ayarlar → Kullanıcılar ve izinler\'e gidin',
        'step_3' => '"Kullanıcı ekle" düğmesine tıklayın',
        'step_4' => 'Yukarıdaki Hizmet Hesabı E-postasını yapıştırın ve izni "Sahip" olarak ayarlayın',
        'step_5' => 'Kaydetmek için "Ekle"ye tıklayın',
        'open_search_console' => 'Search Console\'u Aç',
        'open_cloud_console' => 'Indexing API\'yi Etkinleştir',
    ],
];
