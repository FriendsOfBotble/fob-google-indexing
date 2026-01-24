<?php

return [
    'name' => 'Google Indexing API',

    'settings' => [
        'title' => 'Google Indexing API',
        'description' => 'Google Search में तेज़ सामग्री इंडेक्सिंग के लिए Google Indexing API कॉन्फ़िगर करें। यह API जॉब पोस्टिंग वेबसाइटों के लिए डिज़ाइन किया गया है ताकि जब जॉब प्रकाशित, अपडेट या हटाई जाएं तो Google को सूचित किया जा सके।',

        'enable' => 'Google Indexing API सक्षम करें',
        'enable_help' => 'सक्षम होने पर, जॉब पोस्टिंग स्वचालित रूप से तेज़ इंडेक्सिंग के लिए Google को सबमिट की जाएंगी',

        'credentials_json' => 'सर्विस अकाउंट क्रेडेंशियल्स (JSON)',
        'credentials_json_help' => 'अपने Google सर्विस अकाउंट की फ़ाइल से पूर्ण JSON सामग्री पेस्ट करें। यह स्टोरेज से पहले एन्क्रिप्ट किया जाएगा। इस कुंजी को कभी भी सार्वजनिक रूप से साझा न करें।',

        'credentials_configured' => 'सर्विस अकाउंट क्रेडेंशियल्स कॉन्फ़िगर किए गए हैं और मान्य हैं।',
        'credentials_missing' => 'कोई क्रेडेंशियल कॉन्फ़िगर नहीं किया गया। नीचे अपना Google सर्विस अकाउंट JSON कुंजी पेस्ट करें।',
        'credentials_invalid' => 'अमान्य क्रेडेंशियल प्रारूप। सुनिश्चित करें कि JSON में client_email और private_key फ़ील्ड शामिल हैं।',

        'status' => 'स्थिति और परीक्षण',
        'quota_used' => 'उपयोग किया गया कोटा',
        'completed_today' => 'आज पूर्ण',
        'pending' => 'लंबित',
        'failed' => 'विफल',

        'test_connection' => 'कनेक्शन परीक्षण करें',
        'test_url' => 'URL सबमिशन परीक्षण करें',
        'submit' => 'सबमिट करें',
        'testing' => 'परीक्षण हो रहा है...',
        'submitting' => 'सबमिट हो रहा है...',

        'not_enabled' => 'Google Indexing API सक्षम नहीं है। ऊपर से सक्षम करें और पहले सेटिंग्स सेव करें।',
        'connection_success' => 'कनेक्शन सफल! क्रेडेंशियल्स मान्य हैं।',
        'connection_failed' => 'कनेक्शन विफल। कृपया अपने क्रेडेंशियल्स जांचें।',
        'url_required' => 'कृपया परीक्षण के लिए एक URL दर्ज करें।',

        'quota_info' => 'कोटा जानकारी',
        'quota_daily' => 'दैनिक सीमा: 200 प्रकाशन अनुरोध (मध्यरात्रि UTC पर रीसेट)',
        'quota_fallback' => 'जब कोटा समाप्त हो जाता है, तो URL कतार में रखे जाते हैं और कोटा रीसेट होने पर स्वचालित रूप से प्रोसेस किए जाते हैं',

        'setup_instructions' => 'सेटअप निर्देश',
        'service_account_email' => 'सर्विस अकाउंट ईमेल',
        'search_console_setup' => 'Google Search Console में सर्विस अकाउंट जोड़ें',
        'step_1' => 'Google Search Console पर जाएं और अपनी प्रॉपर्टी चुनें',
        'step_2' => 'सेटिंग्स → उपयोगकर्ता और अनुमतियां पर जाएं',
        'step_3' => '"उपयोगकर्ता जोड़ें" बटन पर क्लिक करें',
        'step_4' => 'ऊपर दिया गया सर्विस अकाउंट ईमेल पेस्ट करें और अनुमति "मालिक" पर सेट करें',
        'step_5' => 'सेव करने के लिए "जोड़ें" पर क्लिक करें',
        'open_search_console' => 'Search Console खोलें',
        'open_cloud_console' => 'Indexing API सक्षम करें',
    ],
];
