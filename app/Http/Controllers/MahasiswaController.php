<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Halaman dashboard utama
    public function dashboard()
    {
        return view('mahasiswa.dashboard');
    }

    // Form upload dokumentasi
    public function upload()
    {
        return view('mahasiswa.dashboard');
    }

    // Simpan hasil upload (sementara belum disimpan ke database)
    public function storeUpload(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        // Simulasi berhasil upload
        return back()->with('success', 'Dokumentasi berhasil diupload!');
    }
}
