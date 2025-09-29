<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: buat tabel pengajuans.
     */
    public function up(): void
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');        // Judul pengajuan
            $table->text('deskripsi');      // Deskripsi pengajuan
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi: hapus tabel pengajuans.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
