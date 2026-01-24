<?php

return [
    'name' => 'API de Indexación de Google',

    'settings' => [
        'title' => 'API de Indexación de Google',
        'description' => 'Configure la API de Indexación de Google para una indexación de contenido más rápida en Google Search. Esta API está diseñada para sitios web de publicación de empleos para notificar a Google cuando se publican, actualizan o eliminan trabajos.',

        'enable' => 'Habilitar API de Indexación de Google',
        'enable_help' => 'Cuando está habilitado, las publicaciones de empleo se enviarán automáticamente a Google para una indexación más rápida',

        'credentials_json' => 'Credenciales de cuenta de servicio (JSON)',
        'credentials_json_help' => 'Pegue el contenido JSON completo de su archivo de clave de cuenta de servicio de Google. Esto se cifrará antes del almacenamiento. Nunca comparta esta clave públicamente.',

        'credentials_configured' => 'Las credenciales de la cuenta de servicio están configuradas y son válidas.',
        'credentials_missing' => 'No hay credenciales configuradas. Pegue su clave JSON de cuenta de servicio de Google a continuación.',
        'credentials_invalid' => 'Formato de credenciales no válido. Asegúrese de que el JSON contenga los campos client_email y private_key.',

        'status' => 'Estado y pruebas',
        'quota_used' => 'Cuota utilizada',
        'completed_today' => 'Completado hoy',
        'pending' => 'Pendiente',
        'failed' => 'Fallido',

        'test_connection' => 'Probar conexión',
        'test_url' => 'Probar envío de URL',
        'submit' => 'Enviar',
        'testing' => 'Probando...',
        'submitting' => 'Enviando...',

        'not_enabled' => 'La API de Indexación de Google no está habilitada. Habilítela arriba y guarde la configuración primero.',
        'connection_success' => '¡Conexión exitosa! Las credenciales son válidas.',
        'connection_failed' => 'Error de conexión. Por favor verifique sus credenciales.',
        'url_required' => 'Por favor ingrese una URL para probar.',

        'quota_info' => 'Información de cuota',
        'quota_daily' => 'Límite diario: 200 solicitudes de publicación (se reinicia a medianoche UTC)',
        'quota_fallback' => 'Cuando se agota la cuota, las URLs se ponen en cola y se procesan automáticamente cuando se reinicia la cuota',

        'setup_instructions' => 'Instrucciones de configuración',
        'service_account_email' => 'Email de cuenta de servicio',
        'search_console_setup' => 'Agregar cuenta de servicio a Google Search Console',
        'step_1' => 'Vaya a Google Search Console y seleccione su propiedad',
        'step_2' => 'Navegue a Configuración → Usuarios y permisos',
        'step_3' => 'Haga clic en el botón "Agregar usuario"',
        'step_4' => 'Pegue el email de la cuenta de servicio arriba y establezca el permiso como "Propietario"',
        'step_5' => 'Haga clic en "Agregar" para guardar',
        'open_search_console' => 'Abrir Search Console',
        'open_cloud_console' => 'Habilitar API de Indexación',
    ],
];
