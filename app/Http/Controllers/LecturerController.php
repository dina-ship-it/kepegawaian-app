<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all(); // ambil semua data dosen
        return view('lecturer.index', compact('lecturers'));
    }
}
