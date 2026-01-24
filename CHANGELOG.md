# Changelog

All notable changes to this project will be documented in this file.

## [1.0.0] - 2026-01-24

### Added
- Initial release of FOB Google Indexing API plugin
- Real-time indexing notifications for job postings
- OAuth 2.0 service account authentication
- Encrypted credentials storage in database
- Automatic submission on job lifecycle events
- Quota management with daily tracking
- Pending queue fallback when quota exhausted
- Admin settings panel in Settings > Others
- Artisan command for manual management
- Comprehensive test suite

### Features
- **Immediate Submission**: Jobs submitted within seconds of publish/update
- **Full Lifecycle Support**: Publish, update, delete, and expire events
- **Encrypted Storage**: Service account JSON encrypted with Laravel Crypt
- **Quota Tracking**: Real-time usage display (200/day limit)
- **Queue Fallback**: Automatic queuing when quota exhausted
- **Extensible**: ContentIndexingEvent for custom content types
- **Artisan CLI**: Manual URL submission and queue management

### Technical
- Built on Botble CMS 7.6.0+
- Google API Client (google/apiclient ^2.19)
- Event-driven architecture with model observers
- Scheduled tasks for queue processing
- PSR-12 code standards
- PHPUnit test coverage

### Settings
- Enable/disable toggle
- Service account JSON credentials
- Connection test button
- URL submission test
- Quota usage display
- Pending/failed queue counts

### Database Tables
- `fob_google_indexing_pending`: Queue for pending/failed submissions

### Requirements
- PHP 8.2+
- Botble CMS 7.6.0+
- Job Board plugin activated
- Google Cloud Project with Indexing API enabled

### Installation
1. Extract plugin to `platform/plugins/fob-google-indexing`
2. Run: `php artisan cms:plugin:activate fob-google-indexing`
3. Run: `composer update`
4. Configure in Settings > Others > Google Indexing API

### Artisan Commands
```bash
php artisan google-indexing:manage --status
php artisan google-indexing:manage --pending
php artisan google-indexing:manage --url=<url>
php artisan google-indexing:manage --delete-url=<url>
php artisan google-indexing:manage --all-jobs
php artisan google-indexing:manage --clear-pending
php artisan google-indexing:manage --clear-failed
```

### Important Notes
- Google Indexing API is specifically for JobPosting schema websites
- Daily limit of 200 publish requests (resets at midnight UTC)
- Service account must be added as owner in Search Console
- URLs automatically queued when quota exhausted
