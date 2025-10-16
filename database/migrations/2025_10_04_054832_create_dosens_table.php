<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('dosens', function (Blueprint $table) {
        $table->id();
        $table->string('nidn')->unique();
        $table->string('nama');
        $table->string('email')->unique();
        $table->string('prodi');
        $table->string('jabatan')->nullable();
        $table->integer('tahun')->nullable();
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
