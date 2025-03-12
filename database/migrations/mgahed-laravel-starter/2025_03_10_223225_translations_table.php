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
		Schema::create('translations', function (Blueprint $table) {
			$table->bigInteger('id', true);
			$table->string('domain')->nullable();
			$table->bigInteger('site_id')->default(1);
			$table->string('site_lang')->default('en');
			$table->string('full_path')->nullable();
			$table->bigInteger('parent_id')->nullable();
			$table->string('translation_key')->nullable();
			$table->longText('translations')->nullable();
			$table->longText('translations_raw')->nullable();
			$table->boolean('translation_published')->nullable();
			$table->boolean('translations_changed')->nullable();
			$table->bigInteger('child_count')->default(0);
			$table->bigInteger('protected')->nullable();
			$table->bigInteger('created_by')->nullable();
			$table->bigInteger('updated_by')->nullable();
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
			$table->softDeletes()->index();

			$table->unique(['site_id', 'full_path']);
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
