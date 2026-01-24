<?php

return [
    'name' => 'API di indicizzazione Google',

    'settings' => [
        'title' => 'API di indicizzazione Google',
        'description' => 'Configura l\'API di indicizzazione Google per un\'indicizzazione più rapida dei contenuti nella Ricerca Google. Questa API è progettata per i siti di annunci di lavoro per notificare Google quando vengono pubblicati, aggiornati o rimossi annunci.',

        'enable' => 'Abilita API di indicizzazione Google',
        'enable_help' => 'Quando abilitato, gli annunci di lavoro verranno inviati automaticamente a Google per un\'indicizzazione più rapida',

        'credentials_json' => 'Credenziali account di servizio (JSON)',
        'credentials_json_help' => 'Incolla l\'intero contenuto JSON dal file chiave del tuo account di servizio Google. Questo verrà crittografato prima dell\'archiviazione. Non condividere mai questa chiave pubblicamente.',

        'credentials_configured' => 'Le credenziali dell\'account di servizio sono configurate e valide.',
        'credentials_missing' => 'Nessuna credenziale configurata. Incolla la tua chiave JSON dell\'account di servizio Google qui sotto.',
        'credentials_invalid' => 'Formato credenziali non valido. Assicurati che il JSON contenga i campi client_email e private_key.',

        'status' => 'Stato e test',
        'quota_used' => 'Quota utilizzata',
        'completed_today' => 'Completati oggi',
        'pending' => 'In attesa',
        'failed' => 'Fallito',

        'test_connection' => 'Testa connessione',
        'test_url' => 'Testa invio URL',
        'submit' => 'Invia',
        'testing' => 'Test in corso...',
        'submitting' => 'Invio in corso...',

        'not_enabled' => 'L\'API di indicizzazione Google non è abilitata. Abilitala sopra e salva prima le impostazioni.',
        'connection_success' => 'Connessione riuscita! Le credenziali sono valide.',
        'connection_failed' => 'Connessione fallita. Verifica le tue credenziali.',
        'url_required' => 'Inserisci un URL da testare.',

        'quota_info' => 'Informazioni sulla quota',
        'quota_daily' => 'Limite giornaliero: 200 richieste di pubblicazione (si azzera a mezzanotte UTC)',
        'quota_fallback' => 'Quando la quota è esaurita, gli URL vengono messi in coda ed elaborati automaticamente quando la quota viene ripristinata',

        'setup_instructions' => 'Istruzioni di configurazione',
        'service_account_email' => 'Email account di servizio',
        'search_console_setup' => 'Aggiungi account di servizio a Google Search Console',
        'step_1' => 'Vai su Google Search Console e seleziona la tua proprietà',
        'step_2' => 'Vai su Impostazioni → Utenti e autorizzazioni',
        'step_3' => 'Clicca sul pulsante "Aggiungi utente"',
        'step_4' => 'Incolla l\'email dell\'account di servizio sopra e imposta l\'autorizzazione su "Proprietario"',
        'step_5' => 'Clicca su "Aggiungi" per salvare',
        'open_search_console' => 'Apri Search Console',
        'open_cloud_console' => 'Abilita API di indicizzazione',
    ],
];
