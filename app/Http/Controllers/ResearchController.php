<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $research = Research::all();
        return view('research.index', compact('research'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('research.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        Research::create($request->all());

        return redirect()->route('research.index')->with('success', 'Penelitian berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Research $research)
    {
        return view('research.show', compact('research'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Research $research)
    {
        return view('research.edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Research $research)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        $research->update($request->all());

        return redirect()->route('research.index')->with('success', 'Penelitian berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Research $research)
    {
        $research->delete();

        return redirect()->route('research.index')->with('success', 'Penelitian berhasil dihapus!');
    }
}
