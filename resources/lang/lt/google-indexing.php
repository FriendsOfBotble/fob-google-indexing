<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Sukonfigūruokite Google Indexing API greitesniam turinio indeksavimui Google paieškoje. Ši API skirta darbo skelbimų svetainėms pranešti Google, kai darbo vietos publikuojamos, atnaujinamos arba pašalinamos.',

        'enable' => 'Įjungti Google Indexing API',
        'enable_help' => 'Kai įjungta, darbo skelbimai bus automatiškai siunčiami Google greitesniam indeksavimui',

        'credentials_json' => 'Paslaugos paskyros kredencialai (JSON)',
        'credentials_json_help' => 'Įklijuokite visą JSON turinį iš savo Google paslaugos paskyros rakto failo. Tai bus užšifruota prieš saugojimą. Niekada nebendrinkite šio rakto viešai.',

        'credentials_configured' => 'Paslaugos paskyros kredencialai sukonfigūruoti ir galiojantys.',
        'credentials_missing' => 'Nėra sukonfigūruotų kredencialų. Įklijuokite savo Google paslaugos paskyros JSON raktą žemiau.',
        'credentials_invalid' => 'Neteisingas kredencialų formatas. Įsitikinkite, kad JSON turi laukus client_email ir private_key.',

        'status' => 'Būsena ir testavimas',
        'quota_used' => 'Panaudota kvota',
        'completed_today' => 'Baigta šiandien',
        'pending' => 'Laukiama',
        'failed' => 'Nepavyko',

        'test_connection' => 'Testuoti ryšį',
        'test_url' => 'Testuoti URL pateikimą',
        'submit' => 'Pateikti',
        'testing' => 'Testuojama...',
        'submitting' => 'Pateikiama...',

        'not_enabled' => 'Google Indexing API neįjungta. Įjunkite aukščiau ir pirmiausia išsaugokite nustatymus.',
        'connection_success' => 'Ryšys sėkmingas! Kredencialai galioja.',
        'connection_failed' => 'Ryšio nepavyko užmegzti. Patikrinkite savo kredencialus.',
        'url_required' => 'Įveskite URL testavimui.',

        'quota_info' => 'Kvotos informacija',
        'quota_daily' => 'Dienos limitas: 200 publikavimo užklausų (atstatoma vidurnaktį UTC)',
        'quota_fallback' => 'Kai kvota išsenka, URL įtraukiami į eilę ir automatiškai apdorojami, kai kvota atstatoma',

        'setup_instructions' => 'Sąrankos instrukcijos',
        'service_account_email' => 'Paslaugos paskyros el. paštas',
        'search_console_setup' => 'Pridėkite paslaugos paskyrą prie Google Search Console',
        'step_1' => 'Eikite į Google Search Console ir pasirinkite savo nuosavybę',
        'step_2' => 'Eikite į Nustatymai → Vartotojai ir leidimai',
        'step_3' => 'Spustelėkite mygtuką "Pridėti vartotoją"',
        'step_4' => 'Įklijuokite paslaugos paskyros el. paštą aukščiau ir nustatykite leidimą į "Savininkas"',
        'step_5' => 'Spustelėkite "Pridėti" išsaugojimui',
        'open_search_console' => 'Atidaryti Search Console',
        'open_cloud_console' => 'Įjungti Indexing API',
    ],
];
