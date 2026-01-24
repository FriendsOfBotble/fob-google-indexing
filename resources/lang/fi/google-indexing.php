<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Määritä Google Indexing API nopeampaan sisällön indeksointiin Google-haussa. Tämä API on suunniteltu työpaikkailmoitussivustoille ilmoittamaan Googlelle, kun työpaikkoja julkaistaan, päivitetään tai poistetaan.',

        'enable' => 'Ota Google Indexing API käyttöön',
        'enable_help' => 'Kun käytössä, työpaikkailmoitukset lähetetään automaattisesti Googlelle nopeampaa indeksointia varten',

        'credentials_json' => 'Palvelutilin tunnistetiedot (JSON)',
        'credentials_json_help' => 'Liitä täysi JSON-sisältö Google-palvelutilisi avaintiedostosta. Tämä salataan ennen tallennusta. Älä koskaan jaa tätä avainta julkisesti.',

        'credentials_configured' => 'Palvelutilin tunnistetiedot on määritetty ja ne ovat voimassa.',
        'credentials_missing' => 'Tunnistetietoja ei ole määritetty. Liitä Google-palvelutilisi JSON-avain alle.',
        'credentials_invalid' => 'Virheellinen tunnistetietomuoto. Varmista, että JSON sisältää kentät client_email ja private_key.',

        'status' => 'Tila ja testaus',
        'quota_used' => 'Kiintiö käytetty',
        'completed_today' => 'Valmistunut tänään',
        'pending' => 'Odottaa',
        'failed' => 'Epäonnistui',

        'test_connection' => 'Testaa yhteys',
        'test_url' => 'Testaa URL-lähetys',
        'submit' => 'Lähetä',
        'testing' => 'Testataan...',
        'submitting' => 'Lähetetään...',

        'not_enabled' => 'Google Indexing API ei ole käytössä. Ota se käyttöön yllä ja tallenna asetukset ensin.',
        'connection_success' => 'Yhteys onnistui! Tunnistetiedot ovat voimassa.',
        'connection_failed' => 'Yhteys epäonnistui. Tarkista tunnistetietosi.',
        'url_required' => 'Anna testattava URL.',

        'quota_info' => 'Kiintiötiedot',
        'quota_daily' => 'Päivittäinen raja: 200 julkaisupyyntöä (nollautuu keskiyöllä UTC)',
        'quota_fallback' => 'Kun kiintiö on käytetty, URL:t asetetaan jonoon ja käsitellään automaattisesti, kun kiintiö nollautuu',

        'setup_instructions' => 'Asennusohjeet',
        'service_account_email' => 'Palvelutilin sähköposti',
        'search_console_setup' => 'Lisää palvelutili Google Search Consoleen',
        'step_1' => 'Siirry Google Search Consoleen ja valitse ominaisuutesi',
        'step_2' => 'Siirry kohtaan Asetukset → Käyttäjät ja käyttöoikeudet',
        'step_3' => 'Napsauta "Lisää käyttäjä" -painiketta',
        'step_4' => 'Liitä yllä oleva palvelutilin sähköposti ja aseta käyttöoikeudeksi "Omistaja"',
        'step_5' => 'Napsauta "Lisää" tallentaaksesi',
        'open_search_console' => 'Avaa Search Console',
        'open_cloud_console' => 'Ota Indexing API käyttöön',
    ],
];
