<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    // 🔹 Tampilkan semua dosen
    public function index()
    {
        // variabel disamakan dengan yang dipakai di Blade (tidak error lagi)
        $dosen = Dosen::latest()->get();
        return view('dosen.index', compact('dosen'));
    }

    // 🔹 Form tambah dosen
    public function create()
    {
        return view('dosen.create');
    }

    // 🔹 Simpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nidn' => 'required|unique:dosens,nidn|max:20',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email',
            'fakultas' => 'required|string|max:100',
            'prodi' => 'required|string|max:100',
            'jabatan' => 'nullable|string|max:100',
            'tahun' => 'nullable|integer|min:2000|max:' . date('Y'),
        ]);

        Dosen::create($validated);

        return redirect()->route('dosen.index')->with('success', '✅ Data dosen berhasil disimpan!');
    }

    // 🔹 Form edit dosen
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    // 🔹 Update data dosen
    public function update(Request $request, Dosen $dosen)
    {
        $validated = $request->validate([
            'nidn' => 'required|max:20|unique:dosens,nidn,' . $dosen->id,
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
            'fakultas' => 'required|string|max:100',
            'prodi' => 'required|string|max:100',
            'jabatan' => 'nullable|string|max:100',
            'tahun' => 'nullable|integer|min:2000|max:' . date('Y'),
        ]);

        $dosen->update($validated);

        return redirect()->route('dosen.index')->with('success', '✅ Data dosen berhasil diperbarui!');
    }

    // 🔹 Hapus data dosen
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', '🗑️ Data dosen berhasil dihapus!');
    }

    // 🔹 DASHBOARD DOSEN
    public function dashboard()
    {
        $data = [
            'nama' => 'Dosen Aktif',
            'penelitian' => \App\Models\Penelitian::count(),
            'pengabdian' => \App\Models\Pengabdian::count(),
            'prestasi' => \App\Models\Prestasi::count(),
            'publikasi' => 0,
        ];

        return view('dosen.dashboard', compact('data'));
    }
}
