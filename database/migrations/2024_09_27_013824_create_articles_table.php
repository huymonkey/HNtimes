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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            // REFERENCIES
            $table->foreignId('author_id')->constrained('users');

            $table->string('title')->unique()->nullable();
            $table->string('slug')->nullable();
            $table->string('img')->nullable();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->boolean('is_trending')->default(0);
            $table->string('type', 100)->default(\App\Models\Article::TYPE_NORMAL);
            $table->string('status', 100)->default(\App\Models\Article::STATUS_PENDING);
            $table->string('canceled_reason')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
