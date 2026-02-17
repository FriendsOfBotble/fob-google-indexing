<?php

namespace FriendsOfBotble\GoogleIndexing\Providers;

use Botble\JobBoard\Enums\JobStatusEnum;
use Botble\JobBoard\Models\Job;
use FriendsOfBotble\GoogleIndexing\Listeners\JobBoardIndexingListener;
use FriendsOfBotble\GoogleIndexing\Models\GoogleIndexingPending;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Submit to Google when a job is created or updated (after slug is available)
        add_action([BASE_ACTION_AFTER_CREATE_CONTENT, BASE_ACTION_AFTER_UPDATE_CONTENT], function ($screen, $request, $data): void {
            if ($data instanceof Job) {
                app(JobBoardIndexingListener::class)->handleJobPublishedOrUpdated($data);
            }
        }, 120, 3);

        // Hook into job expiration
        add_action('job_expired', function (Job $job): void {
            app(JobBoardIndexingListener::class)->handleJobExpired($job);
        }, 20);

        // Health check integration
        add_filter('core_system_health_checks', function (array $checks): array {
            $service = app(GoogleIndexingService::class);
            $quota = $service->getQuotaUsage();
            $failed = GoogleIndexingPending::failed()->count();

            $checks['google_indexing'] = [
                'name' => 'Google Indexing API',
                'status' => $service->isEnabled() && $quota['remaining'] > 0 && $failed < 10,
                'message' => $service->isEnabled()
                    ? "Quota: {$quota['used']}/{$quota['limit']}, Failed: {$failed}"
                    : 'Disabled',
            ];

            return $checks;
        }, 20);

        // Schedule pending queue processing
        $this->app->afterResolving(Schedule::class, function (Schedule $schedule): void {
            $schedule->call(function (): void {
                app(GoogleIndexingService::class)->processPendingQueue();
            })->hourly()->name('google-indexing:process-pending')->withoutOverlapping();

            // Check for expired jobs and send URL_DELETED
            $schedule->call(function (): void {
                $this->handleExpiredJobs();
            })->hourly()->name('google-indexing:check-expired')->withoutOverlapping();
        });
    }

    protected function handleExpiredJobs(): void
    {
        if (! class_exists(Job::class)) {
            return;
        }

        $service = app(GoogleIndexingService::class);

        if (! $service->isEnabled()) {
            return;
        }

        // Get jobs that just expired (within last check interval)
        $recentlyExpired = Job::query()
            ->where('status', JobStatusEnum::PUBLISHED)
            ->where('expire_date', '<', now())
            ->where('expire_date', '>=', now()->subHour())
            ->get();

        $listener = app(JobBoardIndexingListener::class);

        foreach ($recentlyExpired as $job) {
            $listener->handleJobExpired($job);
        }
    }
}
