<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = [
            ['id' => 1, 'name' => 'Dr. Ahmad', 'department' => 'Teknik Informatika'],
            ['id' => 2, 'name' => 'Prof. Sari', 'department' => 'Matematika'],
            ['id' => 3, 'name' => 'Budi Santoso', 'department' => 'Fisika'],
            ['id' => 4, 'name' => 'Dewi Lestari', 'department' => 'Kimia'],
        ];

        return view('lecturer.index', compact('lecturers'));
    }
}
