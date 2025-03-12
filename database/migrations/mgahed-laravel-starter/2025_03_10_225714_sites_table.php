<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('domain')->nullable();
            $table->string('ulid');
            $table->string('title');
            $table->mediumText('site_contents')->nullable();
            $table->mediumText('configurations')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->boolean('default_site')->nullable();
            $table->integer('record_priority')->default(100);
            $table->boolean('record_state')->nullable();
            $table->integer('protected')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->softDeletes();
            $table->string('lang');
            $table->string('language')->nullable();
            $table->string('direction')->nullable();
            $table->string('logo')->nullable();
            $table->string('flag')->nullable();
            $table->longText('translations')->nullable();
            $table->timestamp('publish_at')->useCurrent();
            $table->timestamp('expire_at')->nullable();

            $table->unique(['domain', 'ulid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
