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
        Schema::create('lms', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // 'text' or 'image'
            $table->string('title')->nullable();
            $table->text('content')->nullable(); // untuk narasi text
            $table->string('image')->nullable(); // untuk image path
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lms');
    }
};