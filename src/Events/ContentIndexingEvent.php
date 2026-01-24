<?php

namespace FriendsOfBotble\GoogleIndexing\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Event fired when content needs to be submitted to Google Indexing API.
 * Use this event for extensibility - other plugins can fire this event
 * to trigger indexing for their content types.
 */
class ContentIndexingEvent
{
    use SerializesModels;

    public function __construct(
        public string $url,
        public string $type = 'URL_UPDATED',
        public ?string $contentType = null,
        public int|string|null $contentId = null
    ) {
    }
}
