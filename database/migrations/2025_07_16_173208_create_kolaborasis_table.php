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
         Schema::create('kolaborasis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->enum('kategori', ['perusahaan', 'akademisi']);
        $table->string('logo');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kolaborasis');
    }
};
