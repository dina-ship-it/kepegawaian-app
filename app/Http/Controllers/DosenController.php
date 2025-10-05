<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // 🧩 Tampilkan semua dosen
    public function index()
    {
        $dosen = Dosen::all();

        // Hitung jumlah dosen per tahun
        $tahun2023 = Dosen::where('tahun', 2023)->count();
        $tahun2024 = Dosen::where('tahun', 2024)->count();
        $tahun2025 = Dosen::where('tahun', 2025)->count();

        return view('dosen.index', compact('dosen', 'tahun2023', 'tahun2024', 'tahun2025'));
    }

    // ➕ Tampilkan form tambah dosen
    public function create()
    {
        return view('dosen.create');
    }

    // 💾 Simpan dosen baru
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'fakultas' => 'required',
            'prodi' => 'required',
            'jabatan' => 'required',
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'email' => $request->email,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'jabatan' => $request->jabatan,
            'status' => 'Aktif',      // ✅ Default status
            'tahun' => date('Y'),     // ✅ Otomatis isi tahun sekarang
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    // ✏️ Tampilkan form edit dosen
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    // 🔄 Update data dosen
    public function update(Request $request, $id)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'fakultas' => 'required',
            'prodi' => 'required',
            'jabatan' => 'required',
        ]);

        $dosen = Dosen::findOrFail($id);

        $dosen->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'email' => $request->email,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'jabatan' => $request->jabatan,
            'status' => $request->status ?? 'Aktif',  // default kalau tidak dikirim dari form
            'tahun' => $request->tahun ?? $dosen->tahun, // tetap pakai tahun lama kalau tidak diubah
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui!');
    }

    // 🗑️ Hapus dosen
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus!');
    }
}
