<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; // Pastikan model ini benar-benar ada di app/Models/Admin.php
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginAdmin(Request $request)
    {
        // ✅ Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // ✅ Cari admin berdasarkan username
        $admin = Admin::where('username', $request->username)->first();

        // ✅ Cek apakah admin ditemukan dan password cocok
        if ($admin && Hash::check($request->password, $admin->password)) {
            
            // ✅ Simpan sesi login (opsional, agar bisa dipakai di middleware nanti)
            Session::put('admin_logged_in', true);
            Session::put('admin_name', $admin->username);

            // ✅ Redirect ke dashboard admin
            return redirect()->route('admin.dashboard')
                ->with('success', 'Berhasil login sebagai Administrator!');
        } else {
            // ❌ Login gagal
            return back()->with('error', 'Username atau password salah!');
        }
    }

    // ✅ Tambahan opsional: untuk logout admin
    public function logoutAdmin()
    {
        Session::forget(['admin_logged_in', 'admin_name']);
        return redirect()->route('login.admin')->with('success', 'Berhasil logout.');
    }
}
