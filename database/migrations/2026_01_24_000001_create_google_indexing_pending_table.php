<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('fob_google_indexing_pending', function (Blueprint $table) {
            $table->id();
            $table->string('url', 500);
            $table->string('type', 20)->default('URL_UPDATED');
            $table->string('content_type', 50)->nullable();
            $table->string('content_id', 50)->nullable();
            $table->string('status', 20)->default('pending');
            $table->unsignedInteger('attempts')->default(0);
            $table->text('last_error')->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamps();

            $table->index(['status', 'scheduled_at']);
            $table->index('url');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fob_google_indexing_pending');
    }
};
