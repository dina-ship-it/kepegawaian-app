<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: membuat tabel 'prestasis'
     */
    public function up(): void
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prestasi');
            $table->string('tingkat');
            $table->string('penyelenggara');
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi (hapus tabel jika dibatalkan)
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
