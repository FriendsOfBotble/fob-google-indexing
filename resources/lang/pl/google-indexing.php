<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Skonfiguruj Google Indexing API dla szybszego indeksowania treści w wyszukiwarce Google. To API jest przeznaczone dla stron z ofertami pracy, aby powiadamiać Google o publikacji, aktualizacji lub usunięciu ofert.',

        'enable' => 'Włącz Google Indexing API',
        'enable_help' => 'Po włączeniu oferty pracy będą automatycznie przesyłane do Google w celu szybszego indeksowania',

        'credentials_json' => 'Dane uwierzytelniające konta usługi (JSON)',
        'credentials_json_help' => 'Wklej pełną zawartość JSON z pliku klucza konta usługi Google. Dane zostaną zaszyfrowane przed zapisem. Nigdy nie udostępniaj tego klucza publicznie.',

        'credentials_configured' => 'Dane uwierzytelniające konta usługi są skonfigurowane i prawidłowe.',
        'credentials_missing' => 'Brak skonfigurowanych danych uwierzytelniających. Wklej poniżej klucz JSON konta usługi Google.',
        'credentials_invalid' => 'Nieprawidłowy format danych uwierzytelniających. Upewnij się, że JSON zawiera pola client_email i private_key.',

        'status' => 'Status i testowanie',
        'quota_used' => 'Wykorzystany limit',
        'completed_today' => 'Ukończone dzisiaj',
        'pending' => 'Oczekujące',
        'failed' => 'Nieudane',

        'test_connection' => 'Testuj połączenie',
        'test_url' => 'Testuj przesyłanie URL',
        'submit' => 'Wyślij',
        'testing' => 'Testowanie...',
        'submitting' => 'Przesyłanie...',

        'not_enabled' => 'Google Indexing API nie jest włączone. Włącz je powyżej i najpierw zapisz ustawienia.',
        'connection_success' => 'Połączenie udane! Dane uwierzytelniające są prawidłowe.',
        'connection_failed' => 'Połączenie nieudane. Sprawdź swoje dane uwierzytelniające.',
        'url_required' => 'Wprowadź URL do testowania.',

        'quota_info' => 'Informacje o limicie',
        'quota_daily' => 'Dzienny limit: 200 żądań publikacji (resetowany o północy UTC)',
        'quota_fallback' => 'Po wyczerpaniu limitu URL-e są umieszczane w kolejce i przetwarzane automatycznie po zresetowaniu limitu',

        'setup_instructions' => 'Instrukcje konfiguracji',
        'service_account_email' => 'E-mail konta usługi',
        'search_console_setup' => 'Dodaj konto usługi do Google Search Console',
        'step_1' => 'Przejdź do Google Search Console i wybierz swoją usługę',
        'step_2' => 'Przejdź do Ustawienia → Użytkownicy i uprawnienia',
        'step_3' => 'Kliknij przycisk "Dodaj użytkownika"',
        'step_4' => 'Wklej powyższy e-mail konta usługi i ustaw uprawnienie na "Właściciel"',
        'step_5' => 'Kliknij "Dodaj", aby zapisać',
        'open_search_console' => 'Otwórz Search Console',
        'open_cloud_console' => 'Włącz Indexing API',
    ],
];
