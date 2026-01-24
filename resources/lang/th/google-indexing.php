<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'กำหนดค่า Google Indexing API เพื่อการจัดทำดัชนีเนื้อหาที่รวดเร็วขึ้นใน Google Search API นี้ออกแบบมาสำหรับเว็บไซต์ประกาศงานเพื่อแจ้ง Google เมื่อมีการเผยแพร่ อัปเดต หรือลบงาน',

        'enable' => 'เปิดใช้งาน Google Indexing API',
        'enable_help' => 'เมื่อเปิดใช้งาน ประกาศงานจะถูกส่งไปยัง Google โดยอัตโนมัติเพื่อการจัดทำดัชนีที่รวดเร็วขึ้น',

        'credentials_json' => 'ข้อมูลประจำตัวบัญชีบริการ (JSON)',
        'credentials_json_help' => 'วางเนื้อหา JSON เต็มจากไฟล์คีย์บัญชีบริการ Google ของคุณ ข้อมูลจะถูกเข้ารหัสก่อนจัดเก็บ อย่าเปิดเผยคีย์นี้ต่อสาธารณะ',

        'credentials_configured' => 'ข้อมูลประจำตัวบัญชีบริการถูกกำหนดค่าและถูกต้อง',
        'credentials_missing' => 'ไม่มีข้อมูลประจำตัวที่กำหนดค่าไว้ วางคีย์ JSON บัญชีบริการ Google ของคุณด้านล่าง',
        'credentials_invalid' => 'รูปแบบข้อมูลประจำตัวไม่ถูกต้อง ตรวจสอบให้แน่ใจว่า JSON มีฟิลด์ client_email และ private_key',

        'status' => 'สถานะและการทดสอบ',
        'quota_used' => 'โควต้าที่ใช้',
        'completed_today' => 'เสร็จสิ้นวันนี้',
        'pending' => 'รอดำเนินการ',
        'failed' => 'ล้มเหลว',

        'test_connection' => 'ทดสอบการเชื่อมต่อ',
        'test_url' => 'ทดสอบการส่ง URL',
        'submit' => 'ส่ง',
        'testing' => 'กำลังทดสอบ...',
        'submitting' => 'กำลังส่ง...',

        'not_enabled' => 'Google Indexing API ไม่ได้เปิดใช้งาน เปิดใช้งานด้านบนและบันทึกการตั้งค่าก่อน',
        'connection_success' => 'เชื่อมต่อสำเร็จ! ข้อมูลประจำตัวถูกต้อง',
        'connection_failed' => 'การเชื่อมต่อล้มเหลว กรุณาตรวจสอบข้อมูลประจำตัวของคุณ',
        'url_required' => 'กรุณาใส่ URL เพื่อทดสอบ',

        'quota_info' => 'ข้อมูลโควต้า',
        'quota_daily' => 'ขีดจำกัดรายวัน: 200 คำขอเผยแพร่ (รีเซ็ตเวลาเที่ยงคืน UTC)',
        'quota_fallback' => 'เมื่อโควต้าหมด URL จะถูกจัดคิวและประมวลผลโดยอัตโนมัติเมื่อโควต้ารีเซ็ต',

        'setup_instructions' => 'คำแนะนำการตั้งค่า',
        'service_account_email' => 'อีเมลบัญชีบริการ',
        'search_console_setup' => 'เพิ่มบัญชีบริการไปยัง Google Search Console',
        'step_1' => 'ไปที่ Google Search Console และเลือกพร็อพเพอร์ตี้ของคุณ',
        'step_2' => 'ไปที่ การตั้งค่า → ผู้ใช้และการอนุญาต',
        'step_3' => 'คลิกปุ่ม "เพิ่มผู้ใช้"',
        'step_4' => 'วางอีเมลบัญชีบริการด้านบนและตั้งค่าการอนุญาตเป็น "เจ้าของ"',
        'step_5' => 'คลิก "เพิ่ม" เพื่อบันทึก',
        'open_search_console' => 'เปิด Search Console',
        'open_cloud_console' => 'เปิดใช้งาน Indexing API',
    ],
];
