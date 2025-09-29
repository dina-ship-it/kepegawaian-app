<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\LecturerController; // <-- Sudah ditambahkan

// Dashboard
Route::get('/', fn() => view('dashboard'))->name('dashboard');

// Halaman lainnya
Route::get('/mahasiswa', fn() => view('mahasiswa'))->name('mahasiswa.index');
Route::get('/penelitian', fn() => view('penelitian'))->name('penelitian.index');
Route::get('/pengabdian', fn() => view('pengabdian'))->name('pengabdian.index');
Route::get('/prestasi', fn() => view('prestasi'))->name('prestasi.index');
Route::get('/admin', fn() => view('admin'))->name('admin.index');

// Pengajuan
Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');

// Dosen
Route::get('/dosen', [LecturerController::class, 'index'])->name('dosen.index');
