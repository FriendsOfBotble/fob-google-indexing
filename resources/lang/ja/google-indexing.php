<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Google検索でのコンテンツのインデックス登録を高速化するためにGoogle Indexing APIを設定します。このAPIは求人サイト向けに設計されており、求人が公開、更新、削除されたときにGoogleに通知します。',

        'enable' => 'Google Indexing APIを有効にする',
        'enable_help' => '有効にすると、求人情報は自動的にGoogleに送信され、より速くインデックスされます',

        'credentials_json' => 'サービスアカウント認証情報（JSON）',
        'credentials_json_help' => 'Googleサービスアカウントキーファイルの完全なJSON内容を貼り付けてください。保存前に暗号化されます。このキーを公開しないでください。',

        'credentials_configured' => 'サービスアカウント認証情報は設定済みで有効です。',
        'credentials_missing' => '認証情報が設定されていません。下記にGoogleサービスアカウントJSONキーを貼り付けてください。',
        'credentials_invalid' => '認証情報の形式が無効です。JSONにclient_emailとprivate_keyフィールドが含まれていることを確認してください。',

        'status' => 'ステータスとテスト',
        'quota_used' => '使用済みクォータ',
        'completed_today' => '本日完了',
        'pending' => '保留中',
        'failed' => '失敗',

        'test_connection' => '接続テスト',
        'test_url' => 'URL送信テスト',
        'submit' => '送信',
        'testing' => 'テスト中...',
        'submitting' => '送信中...',

        'not_enabled' => 'Google Indexing APIが有効になっていません。上記で有効にして、まず設定を保存してください。',
        'connection_success' => '接続成功！認証情報は有効です。',
        'connection_failed' => '接続に失敗しました。認証情報を確認してください。',
        'url_required' => 'テストするURLを入力してください。',

        'quota_info' => 'クォータ情報',
        'quota_daily' => '1日の制限：200件の公開リクエスト（UTCの深夜にリセット）',
        'quota_fallback' => 'クォータが使い果たされると、URLはキューに入れられ、クォータがリセットされたときに自動的に処理されます',

        'setup_instructions' => 'セットアップ手順',
        'service_account_email' => 'サービスアカウントメール',
        'search_console_setup' => 'Google Search Consoleにサービスアカウントを追加',
        'step_1' => 'Google Search Consoleにアクセスしてプロパティを選択',
        'step_2' => '設定 → ユーザーと権限に移動',
        'step_3' => '「ユーザーを追加」ボタンをクリック',
        'step_4' => '上記のサービスアカウントメールを貼り付け、権限を「オーナー」に設定',
        'step_5' => '「追加」をクリックして保存',
        'open_search_console' => 'Search Consoleを開く',
        'open_cloud_console' => 'Indexing APIを有効にする',
    ],
];
