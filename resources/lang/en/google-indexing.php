<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Configure Google Indexing API for faster content indexing in Google Search. This API is designed for job posting websites to notify Google when jobs are published, updated, or removed.',

        'enable' => 'Enable Google Indexing API',
        'enable_help' => 'When enabled, job postings will be automatically submitted to Google for faster indexing',

        'credentials_json' => 'Service Account Credentials (JSON)',
        'credentials_json_help' => 'Paste the full JSON content from your Google service account key file. This will be encrypted before storage. Never share this key publicly.',

        'credentials_configured' => 'Service account credentials are configured and valid.',
        'credentials_missing' => 'No credentials configured. Paste your Google service account JSON key below.',
        'credentials_invalid' => 'Invalid credentials format. Ensure the JSON contains client_email and private_key fields.',

        'status' => 'Status & Testing',
        'quota_used' => 'Quota Used',
        'completed_today' => 'Completed Today',
        'pending' => 'Pending',
        'failed' => 'Failed',

        'test_connection' => 'Test Connection',
        'test_url' => 'Test URL Submission',
        'submit' => 'Submit',
        'testing' => 'Testing...',
        'submitting' => 'Submitting...',

        'not_enabled' => 'Google Indexing API is not enabled. Enable it above and save settings first.',
        'connection_success' => 'Connection successful! Credentials are valid.',
        'connection_failed' => 'Connection failed. Please check your credentials.',
        'url_required' => 'Please enter a URL to test.',

        'quota_info' => 'Quota Information',
        'quota_daily' => 'Daily limit: 200 publish requests (resets at midnight UTC)',
        'quota_fallback' => 'When quota is exhausted, URLs are queued and processed automatically when quota resets',

        'setup_instructions' => 'Setup Instructions',
        'service_account_email' => 'Service Account Email',
        'search_console_setup' => 'Add Service Account to Google Search Console',
        'step_1' => 'Go to Google Search Console and select your property',
        'step_2' => 'Navigate to Settings → Users and permissions',
        'step_3' => 'Click "Add user" button',
        'step_4' => 'Paste the Service Account Email above and set permission to "Owner"',
        'step_5' => 'Click "Add" to save',
        'open_search_console' => 'Open Search Console',
        'open_cloud_console' => 'Enable Indexing API',
    ],
];
