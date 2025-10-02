<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Menampilkan semua data penelitian
     */
    public function index()
    {
        $research = Research::all(); // hasilnya collection
        return view('research.index', compact('research'));
    }

    /**
     * Menampilkan form tambah data penelitian
     */
    public function create()
    {
        return view('research.create');
    }

    /**
     * Simpan data baru penelitian
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'bidang' => 'required|string|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'status' => 'required|string|max:50',
        ]);

        Research::create([
            'judul' => $request->judul,
            'bidang' => $request->bidang,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,
        ]);

        return redirect()->route('research.index')
                         ->with('success', 'Data penelitian berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail 1 penelitian
     */
    public function show($id)
    {
        $research = Research::findOrFail($id);
        return view('research.show', compact('research'));
    }

    /**
     * Menampilkan form edit penelitian
     */
    public function edit($id)
    {
        $research = Research::findOrFail($id);
        return view('research.edit', compact('research'));
    }

    /**
     * Update data penelitian
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'bidang' => 'required|string|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'status' => 'required|string|max:50',
        ]);

        $research = Research::findOrFail($id);
        $research->update([
            'judul' => $request->judul,
            'bidang' => $request->bidang,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,
        ]);

        return redirect()->route('research.index')
                         ->with('success', 'Data penelitian berhasil diupdate!');
    }

    /**
     * Hapus penelitian
     */
    public function destroy($id)
    {
        $research = Research::findOrFail($id);
        $research->delete();

        return redirect()->route('research.index')
                         ->with('success', 'Data penelitian berhasil dihapus!');
    }
}
