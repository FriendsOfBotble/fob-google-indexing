@php
    $quota = $service->getQuotaUsage();
    $pending = \FriendsOfBotble\GoogleIndexing\Models\GoogleIndexingPending::pending()->count();
    $failed = \FriendsOfBotble\GoogleIndexing\Models\GoogleIndexingPending::failed()->count();
    $completedToday = \FriendsOfBotble\GoogleIndexing\Models\GoogleIndexingPending::completed()
        ->whereDate('updated_at', today())
        ->count();
    $clientEmail = null;
    $projectId = null;
    $encrypted = setting('google_indexing_credentials');
    if ($encrypted) {
        try {
            $decrypted = \Illuminate\Support\Facades\Crypt::decryptString($encrypted);
            $decoded = json_decode($decrypted, true);
            $clientEmail = $decoded['client_email'] ?? null;
            $projectId = $decoded['project_id'] ?? null;
        } catch (\Exception $e) {}
    }
    $quotaPercent = ($quota['used'] / max($quota['limit'], 1)) * 100;
@endphp

<div class="google-indexing-settings-info mt-4">
    <div class="row g-4">
        {{-- Left Column: Status & Testing --}}
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        <x-core::icon name="ti ti-chart-bar" class="me-2" />
                        {{ trans('plugins/fob-google-indexing::google-indexing.settings.status') }}
                    </h4>
                </div>
                <div class="card-body">
                    {{-- Stats Row --}}
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3">
                            <div class="border rounded p-3 text-center h-100">
                                <div class="text-muted small mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.quota_used') }}</div>
                                <div class="h3 mb-1 {{ $quotaPercent > 80 ? 'text-warning' : 'text-primary' }}">{{ $quota['used'] }}<small class="text-muted">/{{ $quota['limit'] }}</small></div>
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar {{ $quotaPercent > 80 ? 'bg-warning' : 'bg-primary' }}" style="width: {{ $quotaPercent }}%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="border rounded p-3 text-center h-100">
                                <div class="text-muted small mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.completed_today') }}</div>
                                <div class="h3 mb-0 text-success">{{ $completedToday }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="border rounded p-3 text-center h-100">
                                <div class="text-muted small mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.pending') }}</div>
                                <div class="h3 mb-0 {{ $pending > 0 ? 'text-warning' : '' }}">{{ $pending }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="border rounded p-3 text-center h-100">
                                <div class="text-muted small mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.failed') }}</div>
                                <div class="h3 mb-0 {{ $failed > 0 ? 'text-danger' : '' }}">{{ $failed }}</div>
                            </div>
                        </div>
                    </div>

                    {{-- Test Connection --}}
                    <div class="d-flex align-items-center gap-2 mb-4 pb-4 border-bottom">
                        <button type="button" class="btn btn-outline-info" id="test-google-connection">
                            <x-core::icon name="ti ti-plug" class="me-1" />
                            {{ trans('plugins/fob-google-indexing::google-indexing.settings.test_connection') }}
                        </button>
                        <span id="connection-result"></span>
                    </div>

                    {{-- Test URL Submission --}}
                    <div>
                        <label class="form-label fw-semibold">
                            <x-core::icon name="ti ti-send" class="me-1" />
                            {{ trans('plugins/fob-google-indexing::google-indexing.settings.test_url') }}
                        </label>
                        <div class="input-group">
                            <input type="url" class="form-control" id="test-indexing-url" placeholder="https://example.com/jobs/123">
                            <button type="button" class="btn btn-primary" id="test-google-url">
                                <x-core::icon name="ti ti-send" class="me-1" />
                                {{ trans('plugins/fob-google-indexing::google-indexing.settings.submit') }}
                            </button>
                        </div>
                        <div id="test-url-result" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Column: Setup Instructions --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-primary-lt">
                    <h4 class="card-title mb-0">
                        <x-core::icon name="ti ti-settings" class="me-2" />
                        {{ trans('plugins/fob-google-indexing::google-indexing.settings.setup_instructions') }}
                    </h4>
                </div>
                <div class="card-body">
                    @if($clientEmail)
                        <div class="mb-3">
                            <label class="form-label small text-muted mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.service_account_email') }}</label>
                            <div class="d-flex align-items-center gap-2">
                                <code class="flex-grow-1 p-2 bg-light rounded small text-break">{{ $clientEmail }}</code>
                                <x-core::copy :copyable-state="$clientEmail" />
                            </div>
                        </div>
                    @endif

                    <div class="mb-3">
                        <p class="small text-muted mb-2">{{ trans('plugins/fob-google-indexing::google-indexing.settings.search_console_setup') }}:</p>
                        <ol class="small ps-3 mb-0">
                            <li class="mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.step_1') }}</li>
                            <li class="mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.step_2') }}</li>
                            <li class="mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.step_3') }}</li>
                            <li class="mb-1">{{ trans('plugins/fob-google-indexing::google-indexing.settings.step_4') }}</li>
                            <li>{{ trans('plugins/fob-google-indexing::google-indexing.settings.step_5') }}</li>
                        </ol>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="https://search.google.com/search-console" target="_blank" class="btn btn-primary btn-sm">
                            <x-core::icon name="ti ti-external-link" class="me-1" />
                            {{ trans('plugins/fob-google-indexing::google-indexing.settings.open_search_console') }}
                        </a>
                        @if($projectId)
                            <a href="https://console.cloud.google.com/apis/api/indexing.googleapis.com/overview?project={{ $projectId }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                                <x-core::icon name="ti ti-cloud" class="me-1" />
                                {{ trans('plugins/fob-google-indexing::google-indexing.settings.open_cloud_console') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="small text-muted">
                        <x-core::icon name="ti ti-info-circle" class="me-1" />
                        {{ trans('plugins/fob-google-indexing::google-indexing.settings.quota_daily') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    function initGoogleIndexingTests() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

        const testConnectionBtn = document.getElementById('test-google-connection');
        const testUrlBtn = document.getElementById('test-google-url');

        if (testConnectionBtn && !testConnectionBtn.dataset.initialized) {
            testConnectionBtn.dataset.initialized = 'true';
            testConnectionBtn.addEventListener('click', function() {
                const btn = this;
                const result = document.getElementById('connection-result');
                btn.disabled = true;
                result.innerHTML = '<span class="text-muted">{{ trans('plugins/fob-google-indexing::google-indexing.settings.testing') }}</span>';

                fetch('{{ route("fob-google-indexing.settings.test-connection") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    }
                })
                .then(r => r.json())
                .then(data => {
                    result.innerHTML = data.success
                        ? '<span class="text-success"><i class="fa fa-check"></i> ' + data.message + '</span>'
                        : '<span class="text-danger"><i class="fa fa-times"></i> ' + data.message + '</span>';
                })
                .catch(e => result.innerHTML = '<span class="text-danger">Error: ' + e.message + '</span>')
                .finally(() => btn.disabled = false);
            });
        }

        if (testUrlBtn && !testUrlBtn.dataset.initialized) {
            testUrlBtn.dataset.initialized = 'true';
            testUrlBtn.addEventListener('click', function() {
                const btn = this;
                const url = document.getElementById('test-indexing-url').value;
                const result = document.getElementById('test-url-result');

                if (!url) {
                    result.innerHTML = '<span class="text-warning">{{ trans('plugins/fob-google-indexing::google-indexing.settings.url_required') }}</span>';
                    return;
                }

                btn.disabled = true;
                result.innerHTML = '<span class="text-muted">{{ trans('plugins/fob-google-indexing::google-indexing.settings.submitting') }}</span>';

                fetch('{{ route("fob-google-indexing.settings.test-url") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ url: url })
                })
                .then(r => r.json())
                .then(data => {
                    result.innerHTML = data.success
                        ? '<div class="alert alert-success py-2 mb-0">' + data.message + '</div>'
                        : '<div class="alert alert-danger py-2 mb-0">' + data.message + '</div>';
                })
                .catch(e => result.innerHTML = '<div class="alert alert-danger py-2 mb-0">Error: ' + e.message + '</div>')
                .finally(() => btn.disabled = false);
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initGoogleIndexingTests);
    } else {
        initGoogleIndexingTests();
    }
})();
</script>
