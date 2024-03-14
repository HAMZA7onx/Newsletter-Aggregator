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
        Schema::create('rss_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rss_id')->constrained('rsslist', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title')->default('empty title');
            $table->string('link')->default('empty link');
            $table->text('description')->default('empty description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rss_items');
    }
};
