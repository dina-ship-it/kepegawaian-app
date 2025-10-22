<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;
use App\Exports\PenelitianExport;
use Maatwebsite\Excel\Facades\Excel;

class PenelitianController extends Controller
{
    /**
     * Tampilkan semua data penelitian
     */
    public function index()
    {
        $penelitian = Penelitian::all();
        return view('penelitian.index', compact('penelitian'));
    }

    /**
     * Tampilkan form tambah penelitian
     */
    public function create()
    {
        return view('penelitian.create');
    }

    /**
     * Simpan data penelitian baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:Aktif,Selesai,Dibatalkan',
        ]);

        Penelitian::create($request->all());

        return redirect()->route('penelitian.index')
            ->with('success', 'Data penelitian berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit penelitian
     */
    public function edit($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        return view('penelitian.edit', compact('penelitian'));
    }

    /**
     * Update data penelitian
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:Aktif,Selesai,Dibatalkan',
        ]);

        $penelitian = Penelitian::findOrFail($id);
        $penelitian->update($request->all());

        return redirect()->route('penelitian.index')
            ->with('success', 'Data penelitian berhasil diperbarui!');
    }

    /**
     * Hapus data penelitian
     */
    public function destroy($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        $penelitian->delete();

        return redirect()->route('penelitian.index')
            ->with('success', 'Data penelitian berhasil dihapus!');
    }

    /**
     * Export data penelitian ke Excel
     */
    public function export()
    {
        return Excel::download(new PenelitianExport, 'data_penelitian.xlsx');
    }
}
