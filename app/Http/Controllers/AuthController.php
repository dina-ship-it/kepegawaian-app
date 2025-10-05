<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa; // ✅ tambahkan ini

class AuthController extends Controller
{
    // ✅ Tampilkan form login mahasiswa
    public function showLoginMahasiswaForm()
    {
        // Pastikan view ini ada: resources/views/auth/login_mahasiswa.blade.php
        return view('auth.login_mahasiswa');
    }

    // ✅ Proses login mahasiswa
    public function loginMahasiswa(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        // Cari data mahasiswa berdasarkan NIM
        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();

        // Cek apakah mahasiswa ditemukan dan password cocok
        if ($mahasiswa && Hash::check($request->password, $mahasiswa->password)) {
            Auth::login($mahasiswa); // login user ini
            return redirect()->route('landing')->with('success', 'Login berhasil!');
        }

        // Kalau gagal
        return back()->withErrors(['nim' => 'NIM atau password salah']);
    }
}
