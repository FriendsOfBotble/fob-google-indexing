<?php

namespace FriendsOfBotble\GoogleIndexing\Models;

use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

class GoogleIndexingPending extends BaseModel
{
    protected $table = 'fob_google_indexing_pending';

    protected $fillable = [
        'url',
        'type',
        'content_type',
        'content_id',
        'status',
        'attempts',
        'last_error',
        'scheduled_at',
    ];

    protected function casts(): array
    {
        return [
            'scheduled_at' => 'datetime',
        ];
    }

    public function scopePending(Builder $query): Builder
    {
        return $query->where('status', 'pending')
            ->where(fn ($q) => $q->whereNull('scheduled_at')->orWhere('scheduled_at', '<=', now()));
    }

    public function scopeFailed(Builder $query): Builder
    {
        return $query->where('status', 'failed');
    }

    public function scopeCompleted(Builder $query): Builder
    {
        return $query->where('status', 'completed');
    }

    public static function queueUrl(
        string $url,
        string $type = 'URL_UPDATED',
        ?string $contentType = null,
        int|string|null $contentId = null
    ): self {
        return static::updateOrCreate(
            ['url' => $url],
            [
                'type' => $type,
                'content_type' => $contentType,
                'content_id' => $contentId,
                'status' => 'pending',
                'scheduled_at' => now(),
            ]
        );
    }
}
