<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

// ===============================
// 🌐 HALAMAN AWAL
// ===============================
Route::get('/', function () {
    return view('welcome');
});

// ===============================
// 👤 PILIH LOGIN
// ===============================
Route::get('/login/pilih', [AuthController::class, 'pilihLogin'])->name('login.pilih');

// ===============================
// 👨‍💼 ADMIN LOGIN
// ===============================
Route::get('/login/admin', [AuthController::class, 'showAdminLoginForm'])->name('login.admin');
Route::post('/login/admin', [AuthController::class, 'adminLogin'])->name('login.admin.post');

// ===============================
// 👨‍🏫 DOSEN LOGIN
// ===============================
Route::get('/login/dosen', [AuthController::class, 'showDosenLoginForm'])->name('login.dosen');
Route::post('/login/dosen', [AuthController::class, 'dosenLogin'])->name('login.dosen.post');

// ===============================
// 🎓 MAHASISWA LOGIN
// ===============================
Route::get('/login/mahasiswa', [AuthController::class, 'showMahasiswaLoginForm'])->name('login.mahasiswa');
Route::post('/login/mahasiswa', [AuthController::class, 'mahasiswaLogin'])->name('login.mahasiswa.post');

// ===============================
// 🏠 DASHBOARD MAHASISWA
// ===============================
Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');

// ===============================
// 📁 UPLOAD DOKUMENTASI MAHASISWA
// ===============================
Route::post('/mahasiswa/upload', [MahasiswaController::class, 'storeUpload'])->name('mahasiswa.storeUpload');
