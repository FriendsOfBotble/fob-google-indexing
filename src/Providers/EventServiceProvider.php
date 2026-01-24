<?php

namespace FriendsOfBotble\GoogleIndexing\Providers;

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

        // Job Board model observers
        if (class_exists(Job::class)) {
            $this->registerJobBoardObservers();
        }
    }

    protected function registerJobBoardObservers(): void
    {
        $listener = app(JobBoardIndexingListener::class);

        Job::created(fn (Job $job) => $listener->handleJobCreated($job));
        Job::updated(fn (Job $job) => $listener->handleJobUpdated($job));
        Job::deleting(fn (Job $job) => $listener->handleJobDeleted($job));
    }
}
