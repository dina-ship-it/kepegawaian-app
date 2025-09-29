<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // helper to safely count model if present
        $safeCount = function($modelClass) {
            if (class_exists($modelClass)) {
                try {
                    return $modelClass::count();
                } catch (\Throwable $e) {
                    return 0;
                }
            }
            return 0;
        };

        $data = [
            'totalLecturers'   => $safeCount(\App\Models\Lecturer::class),
            'studentsInvolved' => $safeCount(\App\Models\Student::class),
            'activeResearch'   => $safeCount(\App\Models\Research::class),
            'communityService' => $safeCount(\App\Models\CommunityService::class),
            'achievements'     => $safeCount(\App\Models\Achievement::class),
            // contoh aktivitas (dummy) — bisa ambil dari DB jika sudah ada model
            'recentActivities' => [
                ['title' => 'Penelitian Baru: Sistem Informasi Akademik Cloud', 'date' => '15/1/2024', 'desc' => 'Dr. Ahmad Rizki Pratama memulai penelitian pengembangan sistem informasi akademik berbasis cloud computing'],
                ['title' => 'Workshop Pemrograman untuk Siswa SMA', 'date' => '10/1/2024', 'desc' => 'Program pelatihan pemrograman web untuk 45 siswa SMA di Jakarta Selatan telah dimulai'],
                ['title' => 'Penghargaan Internasional IEEE', 'date' => '5/1/2024', 'desc' => 'Dr. Ahmad Rizki Pratama meraih Best Paper Award di International Conference on Software Engineering'],
            ],
        ];

        return view('dashboard', $data);
    }
}