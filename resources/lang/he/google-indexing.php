<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'הגדר את Google Indexing API לאינדוקס מהיר יותר של תוכן בחיפוש Google. ממשק API זה מיועד לאתרי דרושים כדי להודיע ל-Google כאשר משרות מתפרסמות, מתעדכנות או מוסרות.',

        'enable' => 'הפעל את Google Indexing API',
        'enable_help' => 'כאשר מופעל, פרסומי דרושים יישלחו אוטומטית ל-Google לאינדוקס מהיר יותר',

        'credentials_json' => 'אישורי חשבון שירות (JSON)',
        'credentials_json_help' => 'הדבק את תוכן ה-JSON המלא מקובץ המפתח של חשבון השירות של Google. זה יוצפן לפני האחסון. לעולם אל תשתף מפתח זה בפומבי.',

        'credentials_configured' => 'אישורי חשבון השירות מוגדרים ותקפים.',
        'credentials_missing' => 'לא הוגדרו אישורים. הדבק את מפתח ה-JSON של חשבון השירות של Google למטה.',
        'credentials_invalid' => 'פורמט אישורים לא חוקי. ודא שה-JSON מכיל את השדות client_email ו-private_key.',

        'status' => 'סטטוס ובדיקות',
        'quota_used' => 'מכסה בשימוש',
        'completed_today' => 'הושלם היום',
        'pending' => 'ממתין',
        'failed' => 'נכשל',

        'test_connection' => 'בדוק חיבור',
        'test_url' => 'בדוק שליחת URL',
        'submit' => 'שלח',
        'testing' => 'בודק...',
        'submitting' => 'שולח...',

        'not_enabled' => 'Google Indexing API אינו מופעל. הפעל אותו למעלה ושמור את ההגדרות קודם.',
        'connection_success' => 'החיבור הצליח! האישורים תקפים.',
        'connection_failed' => 'החיבור נכשל. אנא בדוק את האישורים שלך.',
        'url_required' => 'אנא הזן URL לבדיקה.',

        'quota_info' => 'מידע על מכסה',
        'quota_daily' => 'מגבלה יומית: 200 בקשות פרסום (מתאפסת בחצות UTC)',
        'quota_fallback' => 'כאשר המכסה מוצתה, כתובות URL יוכנסו לתור ויעובדו אוטומטית כאשר המכסה תתאפס',

        'setup_instructions' => 'הוראות הגדרה',
        'service_account_email' => 'אימייל חשבון שירות',
        'search_console_setup' => 'הוסף חשבון שירות ל-Google Search Console',
        'step_1' => 'עבור ל-Google Search Console ובחר את הנכס שלך',
        'step_2' => 'נווט להגדרות → משתמשים והרשאות',
        'step_3' => 'לחץ על כפתור "הוסף משתמש"',
        'step_4' => 'הדבק את אימייל חשבון השירות למעלה והגדר הרשאה ל"בעלים"',
        'step_5' => 'לחץ על "הוסף" לשמירה',
        'open_search_console' => 'פתח את Search Console',
        'open_cloud_console' => 'הפעל Indexing API',
    ],
];
