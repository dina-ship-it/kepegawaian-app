<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        // tampilkan daftar pengajuan
        $pengajuan = Pengajuan::latest()->get();
        return view('pengajuan.index', compact('pengajuan'));
    }

    public function create()
    {
        // tampilkan form tambah pengajuan
        return view('pengajuan.create');
    }

    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // simpan ke database
        Pengajuan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan berhasil disimpan.');
    }
}
