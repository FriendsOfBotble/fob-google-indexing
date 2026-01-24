<?php

return [
    'name' => 'API d\'indexation Google',

    'settings' => [
        'title' => 'API d\'indexation Google',
        'description' => 'Configurez l\'API d\'indexation Google pour une indexation plus rapide du contenu dans Google Search. Cette API est conçue pour les sites d\'offres d\'emploi afin de notifier Google lorsque des emplois sont publiés, mis à jour ou supprimés.',

        'enable' => 'Activer l\'API d\'indexation Google',
        'enable_help' => 'Lorsqu\'activé, les offres d\'emploi seront automatiquement soumises à Google pour une indexation plus rapide',

        'credentials_json' => 'Identifiants du compte de service (JSON)',
        'credentials_json_help' => 'Collez le contenu JSON complet de votre fichier de clé de compte de service Google. Ceci sera chiffré avant le stockage. Ne partagez jamais cette clé publiquement.',

        'credentials_configured' => 'Les identifiants du compte de service sont configurés et valides.',
        'credentials_missing' => 'Aucun identifiant configuré. Collez votre clé JSON de compte de service Google ci-dessous.',
        'credentials_invalid' => 'Format d\'identifiants invalide. Assurez-vous que le JSON contient les champs client_email et private_key.',

        'status' => 'Statut et tests',
        'quota_used' => 'Quota utilisé',
        'completed_today' => 'Terminé aujourd\'hui',
        'pending' => 'En attente',
        'failed' => 'Échoué',

        'test_connection' => 'Tester la connexion',
        'test_url' => 'Tester la soumission d\'URL',
        'submit' => 'Soumettre',
        'testing' => 'Test en cours...',
        'submitting' => 'Soumission en cours...',

        'not_enabled' => 'L\'API d\'indexation Google n\'est pas activée. Activez-la ci-dessus et enregistrez d\'abord les paramètres.',
        'connection_success' => 'Connexion réussie ! Les identifiants sont valides.',
        'connection_failed' => 'Échec de la connexion. Veuillez vérifier vos identifiants.',
        'url_required' => 'Veuillez entrer une URL à tester.',

        'quota_info' => 'Informations sur le quota',
        'quota_daily' => 'Limite journalière : 200 requêtes de publication (réinitialisée à minuit UTC)',
        'quota_fallback' => 'Lorsque le quota est épuisé, les URLs sont mises en file d\'attente et traitées automatiquement lors de la réinitialisation du quota',

        'setup_instructions' => 'Instructions de configuration',
        'service_account_email' => 'Email du compte de service',
        'search_console_setup' => 'Ajouter le compte de service à Google Search Console',
        'step_1' => 'Accédez à Google Search Console et sélectionnez votre propriété',
        'step_2' => 'Naviguez vers Paramètres → Utilisateurs et autorisations',
        'step_3' => 'Cliquez sur le bouton "Ajouter un utilisateur"',
        'step_4' => 'Collez l\'email du compte de service ci-dessus et définissez l\'autorisation sur "Propriétaire"',
        'step_5' => 'Cliquez sur "Ajouter" pour enregistrer',
        'open_search_console' => 'Ouvrir Search Console',
        'open_cloud_console' => 'Activer l\'API d\'indexation',
    ],
];
