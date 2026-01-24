<?php

return [
    'api_endpoint' => 'https://indexing.googleapis.com/v3/urlNotifications:publish',
    'metadata_endpoint' => 'https://indexing.googleapis.com/v3/urlNotifications/metadata',
    'scope' => 'https://www.googleapis.com/auth/indexing',
    'daily_quota' => 200,

    // Supported content types for extensibility
    'supported_content_types' => [
        'job' => \Botble\JobBoard\Models\Job::class,
        // Future extensions:
        // 'post' => \Botble\Blog\Models\Post::class,
        // 'product' => \Botble\Ecommerce\Models\Product::class,
    ],
];
