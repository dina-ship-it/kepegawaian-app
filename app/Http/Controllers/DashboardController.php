<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Student;
use App\Models\Research;
use App\Models\Service;
use App\Models\Achievement;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'lecturers' => Lecturer::count(),
            'students' => Student::count(),
            'research' => Research::count(),
            'service' => Service::count(),
            'achievements' => Achievement::count(),
        ];

        return view('dashboard', compact('data'));
    }
}
