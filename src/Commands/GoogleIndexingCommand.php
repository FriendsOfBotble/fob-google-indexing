<?php

namespace FriendsOfBotble\GoogleIndexing\Commands;

use Botble\JobBoard\Enums\JobStatusEnum;
use Botble\JobBoard\Models\Job;
use FriendsOfBotble\GoogleIndexing\Models\GoogleIndexingPending;
use FriendsOfBotble\GoogleIndexing\Services\GoogleIndexingService;
use Illuminate\Console\Command;

class GoogleIndexingCommand extends Command
{
    protected $signature = 'google-indexing:manage
                            {--status : Show status and quota}
                            {--pending : Process pending queue}
                            {--url= : Submit specific URL}
                            {--delete-url= : Submit URL_DELETED for specific URL}
                            {--all-jobs : Queue all published jobs}
                            {--clear-pending : Clear pending queue}
                            {--clear-failed : Clear failed submissions}';

    protected $description = 'Manage Google Indexing API submissions';

    public function handle(GoogleIndexingService $service): int
    {
        if ($this->option('status')) {
            return $this->showStatus($service);
        }

        if ($this->option('clear-pending')) {
            return $this->clearPending();
        }

        if ($this->option('clear-failed')) {
            return $this->clearFailed();
        }

        if ($this->option('pending')) {
            return $this->processPending($service);
        }

        if ($this->option('url')) {
            return $this->submitUrl($service, $this->option('url'), 'URL_UPDATED');
        }

        if ($this->option('delete-url')) {
            return $this->submitUrl($service, $this->option('delete-url'), 'URL_DELETED');
        }

        if ($this->option('all-jobs')) {
            return $this->queueAllJobs();
        }

        $this->info('Google Indexing API Management');
        $this->line('');
        $this->line('Options:');
        $this->line('  --status         Show quota and pending counts');
        $this->line('  --pending        Process pending queue');
        $this->line('  --url=URL        Submit URL for indexing');
        $this->line('  --delete-url=URL Submit URL for deletion');
        $this->line('  --all-jobs       Queue all published jobs');
        $this->line('  --clear-pending  Clear pending queue');
        $this->line('  --clear-failed   Clear failed submissions');

        return Command::SUCCESS;
    }

    protected function showStatus(GoogleIndexingService $service): int
    {
        $quota = $service->getQuotaUsage();
        $pending = GoogleIndexingPending::pending()->count();
        $failed = GoogleIndexingPending::failed()->count();
        $completedToday = GoogleIndexingPending::completed()
            ->whereDate('submitted_at', today())
            ->count();

        $this->newLine();
        $this->table(['Metric', 'Value'], [
            ['Enabled', $service->isEnabled() ? '<fg=green>Yes</>' : '<fg=red>No</>'],
            ['Credentials Valid', $service->validateCredentials() ? '<fg=green>Yes</>' : '<fg=red>No</>'],
            ['Quota Used Today', $quota['used']],
            ['Quota Remaining', $quota['remaining']],
            ['Pending Submissions', $pending],
            ['Failed Submissions', $failed > 0 ? "<fg=red>{$failed}</>" : $failed],
            ['Completed Today', "<fg=green>{$completedToday}</>"],
        ]);

        return Command::SUCCESS;
    }

    protected function processPending(GoogleIndexingService $service): int
    {
        if (! $service->isEnabled()) {
            $this->error('Google Indexing API is not enabled');

            return Command::FAILURE;
        }

        $this->info('Processing pending submissions...');

        $result = $service->processPendingQueue();

        $this->info("Processed: {$result['processed']}, Failed: {$result['failed']}");

        return Command::SUCCESS;
    }

    protected function submitUrl(GoogleIndexingService $service, string $url, string $type): int
    {
        if (! $service->isEnabled()) {
            $this->error('Google Indexing API is not enabled');

            return Command::FAILURE;
        }

        $this->info("Submitting {$type} for: {$url}");

        $result = $service->submitUrl($url, $type);

        if ($result['status'] === 'success') {
            $this->info('Submitted successfully!');

            return Command::SUCCESS;
        }

        $this->error("Failed: {$result['message']}");

        return Command::FAILURE;
    }

    protected function queueAllJobs(): int
    {
        if (! class_exists(Job::class)) {
            $this->error('Job Board plugin not installed');

            return Command::FAILURE;
        }

        $jobs = Job::query()
            ->where('status', JobStatusEnum::PUBLISHED)
            ->notExpired()
            ->get();

        $this->info("Found {$jobs->count()} published jobs");

        if (! $this->confirm('Queue all jobs for indexing?')) {
            return Command::SUCCESS;
        }

        $bar = $this->output->createProgressBar($jobs->count());
        $count = 0;

        foreach ($jobs as $job) {
            if ($job->url) {
                GoogleIndexingPending::queueUrl($job->url, 'URL_UPDATED', 'job', $job->id);
                $count++;
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info("Queued {$count} jobs. Run --pending to process.");

        return Command::SUCCESS;
    }

    protected function clearPending(): int
    {
        $count = GoogleIndexingPending::pending()->delete();
        $this->info("Cleared {$count} pending submissions");

        return Command::SUCCESS;
    }

    protected function clearFailed(): int
    {
        $count = GoogleIndexingPending::failed()->delete();
        $this->info("Cleared {$count} failed submissions");

        return Command::SUCCESS;
    }
}
