<?php

namespace FriendsOfBotble\GoogleIndexing\Providers;

use Botble\JobBoard\Events\JobPublishedEvent;
use Botble\JobBoard\Models\Job;
use FriendsOfBotble\GoogleIndexing\Events\ContentIndexingEvent;
use FriendsOfBotble\GoogleIndexing\Jobs\GoogleIndexingJob;
use FriendsOfBotble\GoogleIndexing\Listeners\JobBoardIndexingListener;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        // Listen to ContentIndexingEvent for extensibility
        $this->app['events']->listen(ContentIndexingEvent::class, function (ContentIndexingEvent $event) {
            $service = app(GoogleIndexingService::class);

            if ($service->isEnabled()) {
                GoogleIndexingJob::dispatch($event->url, $event->type, $event->contentType, $event->contentId)
                    ->delay(now()->addSeconds(10));
            }
        });

        // Listen to JobPublishedEvent for admin approval flow
        if (class_exists(JobPublishedEvent::class)) {
            $this->app['events']->listen(JobPublishedEvent::class, function (JobPublishedEvent $event) {
                if ($event->job->getKey()) {
                    app(JobBoardIndexingListener::class)->handleJobPublishedOrUpdated($event->job);
                }
            });
        }

        // Job Board model observers (deletion only)
        if (class_exists(Job::class)) {
            Job::deleting(fn (Job $job) => app(JobBoardIndexingListener::class)->handleJobDeleted($job));
        }
    }
}
