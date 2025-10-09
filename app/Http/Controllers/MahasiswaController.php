<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // 🔹 Tampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // 🔹 Form tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // 🔹 Simpan data baru
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

    // 🔹 Form edit mahasiswa
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // 🔹 Update data mahasiswa
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

    // 🔹 Hapus data mahasiswa
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', '🗑️ Data mahasiswa berhasil dihapus!');
    }
}
