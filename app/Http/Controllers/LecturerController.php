<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    // READ - tampilkan semua dosen
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('lecturer.index', compact('lecturers'));
    }

    // CREATE - form tambah dosen
    public function create()
    {
        return view('lecturer.create');
    }

    // STORE - simpan dosen baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:lecturers,email',
            'phone' => 'nullable|string|max:15',
        ]);

        Lecturer::create($request->all());

        return redirect()->route('lecturers.index')
                         ->with('success', 'Data dosen berhasil ditambahkan!');
    }

    // EDIT - form edit dosen
    public function edit($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        return view('lecturer.edit', compact('lecturer'));
    }

    // UPDATE - update dosen
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:lecturers,email,' . $id,
            'phone' => 'nullable|string|max:15',
        ]);

        $lecturer = Lecturer::findOrFail($id);
        $lecturer->update($request->all());

        return redirect()->route('lecturers.index')
                         ->with('success', 'Data dosen berhasil diperbarui!');
    }

    // DELETE - hapus dosen
    public function destroy($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->delete();

        return redirect()->route('lecturers.index')
                         ->with('success', 'Data dosen berhasil dihapus!');
    }
}
