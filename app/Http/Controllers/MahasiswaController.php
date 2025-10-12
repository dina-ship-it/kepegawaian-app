<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    // =============================
    // 🏠 Index (default route)
    // =============================
    public function index()
    {
        // arahkan ke halaman dashboard
        return $this->dashboard();
    }

    // =============================
    // 🏠 Dashboard Mahasiswa
    // =============================
    public function dashboard()
    {
        // contoh sementara, nanti bisa ambil dari DB
        $fotoCount = 0;
        $videoCount = 0;
        $total = $fotoCount + $videoCount;

        return view('mahasiswa.dashboard', compact('fotoCount', 'videoCount', 'total'));
    }

    // =============================
    // 📤 Upload Dokumentasi
    // =============================
    public function storeUpload(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png,mp4|max:20480', // max 20MB
        ]);

        // Simpan file ke storage/app/public/dokumentasi
        $path = $request->file('file')->store('dokumentasi', 'public');

        // Kalau nanti ada tabel dokumentasi, kamu bisa simpan ke DB:
        // Dokumentasi::create([
        //     'judul' => $request->judul,
        //     'path' => $path,
        // ]);

        return redirect()->route('mahasiswa.dashboard')->with('success', '✅ Upload dokumentasi berhasil!');
    }

    // =============================
    // 📋 CRUD Mahasiswa
    // =============================
    public function mahasiswaList()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:mahasiswas',
            'fakultas' => 'required|string|max:100',
            'prodi' => 'required|string|max:100',
            'angkatan' => 'required|digits:4',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        Mahasiswa::create($validated);
        return redirect()->route('mahasiswa.index')->with('success', '✅ Data mahasiswa berhasil ditambahkan!');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'fakultas' => 'required|string|max:100',
            'prodi' => 'required|string|max:100',
            'angkatan' => 'required|digits:4',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $mahasiswa->update($validated);
        return redirect()->route('mahasiswa.index')->with('success', '✅ Data mahasiswa berhasil diperbarui!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', '🗑️ Data mahasiswa berhasil dihapus!');
    }
}
