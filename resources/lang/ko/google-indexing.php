<?php

return [
    'name' => 'Google 색인 API',

    'settings' => [
        'title' => 'Google 색인 API',
        'description' => 'Google 검색에서 콘텐츠를 더 빠르게 색인하기 위해 Google 색인 API를 구성합니다. 이 API는 채용 공고 웹사이트가 채용 정보가 게시, 업데이트 또는 삭제될 때 Google에 알릴 수 있도록 설계되었습니다.',

        'enable' => 'Google 색인 API 활성화',
        'enable_help' => '활성화하면 채용 공고가 자동으로 Google에 제출되어 더 빠르게 색인됩니다',

        'credentials_json' => '서비스 계정 자격 증명 (JSON)',
        'credentials_json_help' => 'Google 서비스 계정 키 파일의 전체 JSON 내용을 붙여넣으세요. 저장 전에 암호화됩니다. 이 키를 공개적으로 공유하지 마세요.',

        'credentials_configured' => '서비스 계정 자격 증명이 구성되었으며 유효합니다.',
        'credentials_missing' => '구성된 자격 증명이 없습니다. 아래에 Google 서비스 계정 JSON 키를 붙여넣으세요.',
        'credentials_invalid' => '자격 증명 형식이 잘못되었습니다. JSON에 client_email 및 private_key 필드가 포함되어 있는지 확인하세요.',

        'status' => '상태 및 테스트',
        'quota_used' => '사용된 할당량',
        'completed_today' => '오늘 완료',
        'pending' => '대기 중',
        'failed' => '실패',

        'test_connection' => '연결 테스트',
        'test_url' => 'URL 제출 테스트',
        'submit' => '제출',
        'testing' => '테스트 중...',
        'submitting' => '제출 중...',

        'not_enabled' => 'Google 색인 API가 활성화되지 않았습니다. 위에서 활성화하고 먼저 설정을 저장하세요.',
        'connection_success' => '연결 성공! 자격 증명이 유효합니다.',
        'connection_failed' => '연결 실패. 자격 증명을 확인하세요.',
        'url_required' => '테스트할 URL을 입력하세요.',

        'quota_info' => '할당량 정보',
        'quota_daily' => '일일 한도: 200개 게시 요청 (UTC 자정에 재설정)',
        'quota_fallback' => '할당량이 소진되면 URL이 대기열에 추가되고 할당량이 재설정되면 자동으로 처리됩니다',

        'setup_instructions' => '설정 지침',
        'service_account_email' => '서비스 계정 이메일',
        'search_console_setup' => 'Google Search Console에 서비스 계정 추가',
        'step_1' => 'Google Search Console로 이동하여 속성을 선택하세요',
        'step_2' => '설정 → 사용자 및 권한으로 이동하세요',
        'step_3' => '"사용자 추가" 버튼을 클릭하세요',
        'step_4' => '위의 서비스 계정 이메일을 붙여넣고 권한을 "소유자"로 설정하세요',
        'step_5' => '"추가"를 클릭하여 저장하세요',
        'open_search_console' => 'Search Console 열기',
        'open_cloud_console' => '색인 API 활성화',
    ],
];
