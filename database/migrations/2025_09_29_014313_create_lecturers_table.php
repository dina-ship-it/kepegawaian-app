<?php

// database/migrations/2025_09_29_014313_create_lecturers_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
$table->string('name', 100);
$table->string('email')->unique();
$table->string('phone', 15)->nullable();
$table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
