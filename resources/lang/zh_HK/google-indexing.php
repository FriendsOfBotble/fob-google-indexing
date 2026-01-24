<?php

return [
    'name' => 'Google 索引 API',

    'settings' => [
        'title' => 'Google 索引 API',
        'description' => '配置 Google 索引 API 以在 Google 搜尋中更快地索引內容。此 API 專為招聘網站設計，用於在發佈、更新或刪除職位時通知 Google。',

        'enable' => '啟用 Google 索引 API',
        'enable_help' => '啟用後，職位發佈將自動提交到 Google 以加快索引速度',

        'credentials_json' => '服務賬戶憑據 (JSON)',
        'credentials_json_help' => '貼上 Google 服務賬戶密鑰檔案的完整 JSON 內容。儲存前將進行加密。切勿公開分享此密鑰。',

        'credentials_configured' => '服務賬戶憑據已配置且有效。',
        'credentials_missing' => '未配置憑據。請在下方貼上您的 Google 服務賬戶 JSON 密鑰。',
        'credentials_invalid' => '憑據格式無效。請確保 JSON 包含 client_email 和 private_key 欄位。',

        'status' => '狀態和測試',
        'quota_used' => '已用配額',
        'completed_today' => '今日完成',
        'pending' => '待處理',
        'failed' => '失敗',

        'test_connection' => '測試連接',
        'test_url' => '測試 URL 提交',
        'submit' => '提交',
        'testing' => '測試中...',
        'submitting' => '提交中...',

        'not_enabled' => 'Google 索引 API 未啟用。請先在上方啟用並儲存設定。',
        'connection_success' => '連接成功！憑據有效。',
        'connection_failed' => '連接失敗。請檢查您的憑據。',
        'url_required' => '請輸入要測試的 URL。',

        'quota_info' => '配額資訊',
        'quota_daily' => '每日限制：200 次發佈請求（UTC 午夜重置）',
        'quota_fallback' => '當配額用盡時，URL 將被加入佇列並在配額重置時自動處理',

        'setup_instructions' => '設定說明',
        'service_account_email' => '服務賬戶電郵',
        'search_console_setup' => '將服務賬戶添加到 Google Search Console',
        'step_1' => '前往 Google Search Console 並選擇您的資源',
        'step_2' => '導航到設定 → 使用者和權限',
        'step_3' => '點擊「添加使用者」按鈕',
        'step_4' => '貼上上述服務賬戶電郵並將權限設置為「擁有者」',
        'step_5' => '點擊「添加」儲存',
        'open_search_console' => '開啟 Search Console',
        'open_cloud_console' => '啟用索引 API',
    ],
];
