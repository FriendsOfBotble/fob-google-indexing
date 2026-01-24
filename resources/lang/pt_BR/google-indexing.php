<?php

return [
    'name' => 'API de Indexação do Google',

    'settings' => [
        'title' => 'API de Indexação do Google',
        'description' => 'Configure a API de Indexação do Google para indexação de conteúdo mais rápida no Google Search. Esta API foi projetada para sites de publicação de vagas para notificar o Google quando vagas são publicadas, atualizadas ou removidas.',

        'enable' => 'Ativar API de Indexação do Google',
        'enable_help' => 'Quando ativado, as publicações de vagas serão automaticamente enviadas ao Google para indexação mais rápida',

        'credentials_json' => 'Credenciais da conta de serviço (JSON)',
        'credentials_json_help' => 'Cole o conteúdo JSON completo do seu arquivo de chave da conta de serviço do Google. Isso será criptografado antes do armazenamento. Nunca compartilhe esta chave publicamente.',

        'credentials_configured' => 'As credenciais da conta de serviço estão configuradas e são válidas.',
        'credentials_missing' => 'Nenhuma credencial configurada. Cole sua chave JSON da conta de serviço do Google abaixo.',
        'credentials_invalid' => 'Formato de credenciais inválido. Certifique-se de que o JSON contenha os campos client_email e private_key.',

        'status' => 'Status e testes',
        'quota_used' => 'Cota utilizada',
        'completed_today' => 'Concluído hoje',
        'pending' => 'Pendente',
        'failed' => 'Falhou',

        'test_connection' => 'Testar conexão',
        'test_url' => 'Testar envio de URL',
        'submit' => 'Enviar',
        'testing' => 'Testando...',
        'submitting' => 'Enviando...',

        'not_enabled' => 'A API de Indexação do Google não está ativada. Ative-a acima e salve as configurações primeiro.',
        'connection_success' => 'Conexão bem-sucedida! As credenciais são válidas.',
        'connection_failed' => 'Falha na conexão. Por favor, verifique suas credenciais.',
        'url_required' => 'Por favor, insira uma URL para testar.',

        'quota_info' => 'Informações de cota',
        'quota_daily' => 'Limite diário: 200 solicitações de publicação (reinicia à meia-noite UTC)',
        'quota_fallback' => 'Quando a cota é esgotada, as URLs são enfileiradas e processadas automaticamente quando a cota é reiniciada',

        'setup_instructions' => 'Instruções de configuração',
        'service_account_email' => 'E-mail da conta de serviço',
        'search_console_setup' => 'Adicionar conta de serviço ao Google Search Console',
        'step_1' => 'Acesse o Google Search Console e selecione sua propriedade',
        'step_2' => 'Navegue até Configurações → Usuários e permissões',
        'step_3' => 'Clique no botão "Adicionar usuário"',
        'step_4' => 'Cole o e-mail da conta de serviço acima e defina a permissão como "Proprietário"',
        'step_5' => 'Clique em "Adicionar" para salvar',
        'open_search_console' => 'Abrir Search Console',
        'open_cloud_console' => 'Ativar API de Indexação',
    ],
];
