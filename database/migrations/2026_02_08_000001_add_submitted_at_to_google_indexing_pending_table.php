<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('fob_google_indexing_pending', function (Blueprint $table) {
            $table->timestamp('submitted_at')->nullable()->after('last_error');
        });

        DB::table('fob_google_indexing_pending')
            ->whereIn('status', ['completed', 'failed'])
            ->whereNull('submitted_at')
            ->update(['submitted_at' => DB::raw('updated_at')]);
    }

    public function down(): void
    {
        Schema::table('fob_google_indexing_pending', function (Blueprint $table) {
            $table->dropColumn('submitted_at');
        });
    }
};
