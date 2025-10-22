<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Penelitian;
use App\Models\Pengabdian;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data dari masing-masing tabel
        $totalDosen      = Dosen::count();
        $totalMahasiswa  = Mahasiswa::count();
        $totalPenelitian = Penelitian::count();
        $totalPengabdian = Pengabdian::count();

        // Kirim datanya ke tampilan dashboard.blade.php
        return view('admin.dashboard', compact(
            'totalDosen',
            'totalMahasiswa',
            'totalPenelitian',
            'totalPengabdian'
        ));
    }
}
