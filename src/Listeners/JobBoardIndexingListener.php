<?php

namespace FriendsOfBotble\GoogleIndexing\Listeners;

use Botble\JobBoard\Enums\JobStatusEnum;
use Botble\JobBoard\Enums\ModerationStatusEnum;
use Botble\JobBoard\Models\Job;
use FriendsOfBotble\GoogleIndexing\Jobs\GoogleIndexingJob;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;

class JobBoardIndexingListener
{
    public function __construct(protected GoogleIndexingService $service)
    {
    }

    public function handleJobPublishedOrUpdated(Job $job): void
    {
        $this->submitJob($job, 'URL_UPDATED');
    }

    public function handleJobDeleted(Job $job): void
    {
        if ($job->url && $job->status == JobStatusEnum::PUBLISHED) {
            $this->dispatchIndexing($job->url, 'URL_DELETED', 'job', $job->id);
        }
    }

    public function handleJobExpired(Job $job): void
    {
        if ($job->url) {
            $this->dispatchIndexing($job->url, 'URL_DELETED', 'job', $job->id);
        }
    }

    protected function submitJob(Job $job, string $type): void
    {
        if (! $this->service->isEnabled()) {
            return;
        }

        if ($job->status != JobStatusEnum::PUBLISHED) {
            return;
        }

        if ($job->moderation_status != ModerationStatusEnum::APPROVED) {
            return;
        }

        if (! $job->url) {
            return;
        }

        $this->dispatchIndexing($job->url, $type, 'job', $job->id);
    }

    protected function dispatchIndexing(string $url, string $type, string $contentType, int|string $contentId): void
    {
        $cacheKey = 'google_indexing_dispatched:' . md5($url . $type);

        if (cache()->get($cacheKey)) {
            return;
        }

        cache()->put($cacheKey, true, 300);

        GoogleIndexingJob::dispatch($url, $type, $contentType, $contentId)
            ->delay(now()->addSeconds(10));
    }
}
