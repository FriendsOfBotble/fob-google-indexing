<?php

return [
    'name' => 'Google 索引 API',

    'settings' => [
        'title' => 'Google 索引 API',
        'description' => '配置 Google 索引 API 以在 Google 搜索中更快地索引内容。此 API 专为招聘网站设计，用于在发布、更新或删除职位时通知 Google。',

        'enable' => '启用 Google 索引 API',
        'enable_help' => '启用后，职位发布将自动提交到 Google 以加快索引速度',

        'credentials_json' => '服务账户凭据 (JSON)',
        'credentials_json_help' => '粘贴 Google 服务账户密钥文件的完整 JSON 内容。存储前将进行加密。切勿公开分享此密钥。',

        'credentials_configured' => '服务账户凭据已配置且有效。',
        'credentials_missing' => '未配置凭据。请在下方粘贴您的 Google 服务账户 JSON 密钥。',
        'credentials_invalid' => '凭据格式无效。请确保 JSON 包含 client_email 和 private_key 字段。',

        'status' => '状态和测试',
        'quota_used' => '已用配额',
        'completed_today' => '今日完成',
        'pending' => '待处理',
        'failed' => '失败',

        'test_connection' => '测试连接',
        'test_url' => '测试 URL 提交',
        'submit' => '提交',
        'testing' => '测试中...',
        'submitting' => '提交中...',

        'not_enabled' => 'Google 索引 API 未启用。请先在上方启用并保存设置。',
        'connection_success' => '连接成功！凭据有效。',
        'connection_failed' => '连接失败。请检查您的凭据。',
        'url_required' => '请输入要测试的 URL。',

        'quota_info' => '配额信息',
        'quota_daily' => '每日限制：200 次发布请求（UTC 午夜重置）',
        'quota_fallback' => '当配额用尽时，URL 将被加入队列并在配额重置时自动处理',

        'setup_instructions' => '设置说明',
        'service_account_email' => '服务账户邮箱',
        'search_console_setup' => '将服务账户添加到 Google Search Console',
        'step_1' => '前往 Google Search Console 并选择您的资源',
        'step_2' => '导航到设置 → 用户和权限',
        'step_3' => '点击"添加用户"按钮',
        'step_4' => '粘贴上述服务账户邮箱并将权限设置为"所有者"',
        'step_5' => '点击"添加"保存',
        'open_search_console' => '打开 Search Console',
        'open_cloud_console' => '启用索引 API',
    ],
];
