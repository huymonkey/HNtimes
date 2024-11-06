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
        Schema::create('article_sub_category', function (Blueprint $table) {

            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->foreignId('article_id')->constrained('articles');

            $table->primary(['sub_category_id', 'article_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_sub_category');
    }
};
