<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Tampilkan semua dosen
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    // Tampilkan form tambah dosen
    public function create()
    {
        return view('dosen.create');
    }

    // Simpan dosen baru
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'fakultas' => 'required',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    // Tampilkan form edit dosen
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    // Update data dosen
    public function update(Request $request, $id)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'fakultas' => 'required',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui!');
    }

    // Hapus dosen
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus!');
    }
}
