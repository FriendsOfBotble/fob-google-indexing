<?php

namespace FriendsOfBotble\GoogleIndexing\Contracts;

/**
 * Interface for content that can be indexed via Google Indexing API.
 * Implement this interface on models to enable automatic indexing.
 */
interface IndexableContent
{
    /**
     * Get the public URL for this content.
     */
    public function getIndexingUrl(): ?string;

    /**
     * Determine if this content should be indexed.
     * Return true for published/active content.
     */
    public function shouldIndex(): bool;

    /**
     * Get the indexing notification type.
     *
     * @return string 'URL_UPDATED' or 'URL_DELETED'
     */
    public function getIndexingType(): string;
}
