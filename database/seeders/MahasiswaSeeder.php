<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'username' => 'mahasiswa1',
            'password' => Hash::make('123456'), // password terenkripsi
            'nama' => 'Mahasiswa Satu',
            'email' => 'mahasiswa1@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
