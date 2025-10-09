<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // ===============================
    // PILIH LOGIN
    // ===============================
    public function pilihLogin()
    {
        return view('auth.pilih_login');
    }

    // ===============================
    // ADMIN LOGIN
    // ===============================
    public function showAdminLoginForm()
    {
        return view('auth.login_admin');
    }

    public function adminLogin(Request $request)
    {
        // Login manual contoh
        if ($request->email === 'admin@gmail.com' && $request->password === 'admin123') {
            return redirect()->route('admin.dashboard')->with('success', 'Login admin berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // ===============================
    // DOSEN LOGIN
    // ===============================
    public function showDosenLoginForm()
    {
        return view('auth.login_dosen');
    }

    public function dosenLogin(Request $request)
    {
        if ($request->email === 'dosen@gmail.com' && $request->password === 'dosen123') {
            return redirect()->route('dosen.dashboard')->with('success', 'Login dosen berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // ===============================
    // MAHASISWA LOGIN
    // ===============================
    public function showMahasiswaLoginForm()
    {
        return view('auth.login_mahasiswa');
    }

    public function mahasiswaLogin(Request $request)
    {
        if ($request->email === 'mahasiswa@gmail.com' && $request->password === 'mahasiswa123') {
            return redirect()->route('mahasiswa.dashboard')->with('success', 'Login mahasiswa berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // ===============================
    // LOGOUT
    // ===============================
    public function logout(Request $request)
    {
        // Hapus session login (meskipun di sini manual login)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Arahkan ke halaman pilih login
        return redirect()->route('login.pilih')->with('success', 'Berhasil logout!');
    }
}
