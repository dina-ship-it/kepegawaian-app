<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * 📋 Tampilkan daftar prestasi.
     */
    public function index()
    {
        $prestasis = Prestasi::latest()->get();

        // Hitung jumlah prestasi per tahun
        $tahun2023 = Prestasi::whereYear('tanggal', 2023)->count();
        $tahun2024 = Prestasi::whereYear('tanggal', 2024)->count();
        $tahun2025 = Prestasi::whereYear('tanggal', 2025)->count();

        return view('prestasi.index', compact('prestasis', 'tahun2023', 'tahun2024', 'tahun2025'));
    }

    /**
     * ➕ Tampilkan form tambah prestasi.
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * 💾 Simpan data prestasi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_prestasi' => 'required|string|max:255',
            'tingkat' => 'required|string',
            'penyelenggara' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Prestasi::create($request->all());

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil ditambahkan!');
    }

    /**
     * ✏️ Tampilkan form edit prestasi.
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));
    }

    /**
     * 🔄 Update data prestasi.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_prestasi' => 'required|string|max:255',
            'tingkat' => 'required|string',
            'penyelenggara' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $prestasi = Prestasi::findOrFail($id);
        $prestasi->update($request->all());

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil diperbarui!');
    }

    /**
     * 🗑️ Hapus prestasi.
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil dihapus!');
    }
}
