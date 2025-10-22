<?php

namespace App\Http\Controllers;

use App\Models\Pengabdian;
use Illuminate\Http\Request;

// ✅ Tambahkan ini untuk fitur export Excel
use App\Exports\PengabdianExport;
use Maatwebsite\Excel\Facades\Excel;

class PengabdianController extends Controller
{
    public function index()
    {
        $pengabdian = Pengabdian::all();
        return view('pengabdian.index', compact('pengabdian'));
    }

    public function create()
    {
        return view('pengabdian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'jenis_kegiatan' => 'required',
            'tanggal_mulai' => 'required|date',
            'lokasi' => 'required',
            'deskripsi' => 'nullable',
        ]);

        Pengabdian::create($request->all());
        return redirect()->route('pengabdian.index')->with('success', 'Data pengabdian berhasil ditambahkan.');
    }

    public function edit(Pengabdian $pengabdian)
    {
        return view('pengabdian.edit', compact('pengabdian'));
    }

    public function update(Request $request, Pengabdian $pengabdian)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'jenis_kegiatan' => 'required',
            'tanggal_mulai' => 'required|date',
            'lokasi' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $pengabdian->update($request->all());
        return redirect()->route('pengabdian.index')->with('success', 'Data pengabdian berhasil diperbarui.');
    }

    public function destroy(Pengabdian $pengabdian)
    {
        $pengabdian->delete();
        return redirect()->route('pengabdian.index')->with('success', 'Data pengabdian berhasil dihapus.');
    }

    // ✅ Tambahkan method export biar gak error 500 lagi
    public function export()
    {
        return Excel::download(new PengabdianExport, 'data_pengabdian.xlsx');
    }
}
