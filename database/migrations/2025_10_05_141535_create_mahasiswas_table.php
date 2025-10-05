<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi (membuat tabel mahasiswa)
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20)->unique(); // batas panjang NIM, biar lebih aman
            $table->string('nama', 100);
            $table->string('password'); // nanti diisi dengan bcrypt()
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi (hapus tabel mahasiswa)
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
