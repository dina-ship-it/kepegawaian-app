<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LaporanController;

// ==============================
// LANDING PAGE
// ==============================
Route::get('/', function () {
    return view('landing');
})->name('landing');

// ==============================
// LOGIN PAGE
// ==============================
Route::get('/login/pilih', function () {
    return view('auth.pilih_login');
})->name('login.pilih');

// LOGIN ADMIN
Route::get('/login/admin', function () {
    return view('admin.login_admin');
})->name('login.admin');
Route::post('/login/admin', [AuthController::class, 'loginAdmin'])->name('login.admin.post');

// LOGIN DOSEN
Route::get('/login/dosen', function () {
    return view('auth.login_dosen');
})->name('login.dosen');
// Route::post('/login/dosen', [AuthController::class, 'loginDosen'])->name('login.dosen.post');

// LOGIN MAHASISWA
Route::get('/login/mahasiswa', function () {
    return view('auth.login_mahasiswa');
})->name('login.mahasiswa');
// Route::post('/login/mahasiswa', [AuthController::class, 'loginMahasiswa'])->name('login.mahasiswa.post');

// ==============================
// DASHBOARD ADMIN
// ==============================
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// ==============================
// CRUD RESOURCE ROUTES
// ==============================
Route::resource('dosen', DosenController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('penelitian', PenelitianController::class);
Route::resource('pengabdian', PengabdianController::class);
Route::resource('prestasi', PrestasiController::class);
Route::resource('laporan', LaporanController::class);

// ==============================
// LOGOUT (UNTUK SEMUA ROLE)
// ==============================
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/')->with('success', 'Berhasil logout!');
})->name('logout');
