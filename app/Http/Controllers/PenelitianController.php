<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitian = Penelitian::all();
        return view('penelitian.index', compact('penelitian'));
    }

    public function create()
    {
        return view('penelitian.create');
    }

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

        return redirect()->route('penelitian.index')->with('success', 'Data penelitian berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        return view('penelitian.edit', compact('penelitian'));
    }

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

        return redirect()->route('penelitian.index')->with('success', 'Data penelitian berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        $penelitian->delete();

        return redirect()->route('penelitian.index')->with('success', 'Data penelitian berhasil dihapus!');
    }
}
