<?php

return [
    'name' => 'API Lập chỉ mục Google',

    'settings' => [
        'title' => 'API Lập chỉ mục Google',
        'description' => 'Cấu hình API Lập chỉ mục Google để lập chỉ mục nội dung nhanh hơn trong Google Search. API này được thiết kế cho các trang web đăng tin tuyển dụng để thông báo cho Google khi công việc được đăng, cập nhật hoặc xóa.',

        'enable' => 'Bật API Lập chỉ mục Google',
        'enable_help' => 'Khi bật, các tin tuyển dụng sẽ tự động được gửi đến Google để lập chỉ mục nhanh hơn',

        'credentials_json' => 'Thông tin xác thực Tài khoản Dịch vụ (JSON)',
        'credentials_json_help' => 'Dán toàn bộ nội dung JSON từ tệp khóa tài khoản dịch vụ Google của bạn. Thông tin này sẽ được mã hóa trước khi lưu trữ. Không bao giờ chia sẻ khóa này công khai.',

        'credentials_configured' => 'Thông tin xác thực tài khoản dịch vụ đã được cấu hình và hợp lệ.',
        'credentials_missing' => 'Chưa cấu hình thông tin xác thực. Dán khóa JSON tài khoản dịch vụ Google của bạn bên dưới.',
        'credentials_invalid' => 'Định dạng thông tin xác thực không hợp lệ. Đảm bảo JSON chứa các trường client_email và private_key.',

        'status' => 'Trạng thái & Kiểm tra',
        'quota_used' => 'Hạn mức đã dùng',
        'completed_today' => 'Hoàn thành hôm nay',
        'pending' => 'Đang chờ',
        'failed' => 'Thất bại',

        'test_connection' => 'Kiểm tra kết nối',
        'test_url' => 'Kiểm tra gửi URL',
        'submit' => 'Gửi',
        'testing' => 'Đang kiểm tra...',
        'submitting' => 'Đang gửi...',

        'not_enabled' => 'API Lập chỉ mục Google chưa được bật. Bật tính năng ở trên và lưu cài đặt trước.',
        'connection_success' => 'Kết nối thành công! Thông tin xác thực hợp lệ.',
        'connection_failed' => 'Kết nối thất bại. Vui lòng kiểm tra thông tin xác thực của bạn.',
        'url_required' => 'Vui lòng nhập URL để kiểm tra.',

        'quota_info' => 'Thông tin hạn mức',
        'quota_daily' => 'Giới hạn hàng ngày: 200 yêu cầu đăng (đặt lại lúc nửa đêm UTC)',
        'quota_fallback' => 'Khi hết hạn mức, các URL sẽ được xếp hàng đợi và xử lý tự động khi hạn mức được đặt lại',

        'setup_instructions' => 'Hướng dẫn cài đặt',
        'service_account_email' => 'Email Tài khoản Dịch vụ',
        'search_console_setup' => 'Thêm Tài khoản Dịch vụ vào Google Search Console',
        'step_1' => 'Truy cập Google Search Console và chọn tài sản của bạn',
        'step_2' => 'Điều hướng đến Cài đặt → Người dùng và quyền',
        'step_3' => 'Nhấp vào nút "Thêm người dùng"',
        'step_4' => 'Dán Email Tài khoản Dịch vụ ở trên và đặt quyền thành "Chủ sở hữu"',
        'step_5' => 'Nhấp "Thêm" để lưu',
        'open_search_console' => 'Mở Search Console',
        'open_cloud_console' => 'Bật API Lập chỉ mục',
    ],
];
