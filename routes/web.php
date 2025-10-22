<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Admin\DashboardController;

// ✅ Tambahan untuk fitur export Excel
use App\Exports\PenelitianExport;
use App\Exports\PengabdianExport;
use Maatwebsite\Excel\Facades\Excel;

// ===============================
// 🌐 HALAMAN UTAMA
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
// 🎓 DASHBOARD MAHASISWA
// ===============================
Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
Route::post('/mahasiswa/upload', [MahasiswaController::class, 'uploadStore'])->name('mahasiswa.upload.store');

// ===============================
// 👨‍🏫 DASHBOARD DOSEN
// ===============================
Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');

// ===============================
// 📚 PENELITIAN
// ===============================
// Route export Excel
Route::get('/penelitian/export', [PenelitianController::class, 'export'])->name('penelitian.export');
// Route CRUD penelitian
Route::resource('penelitian', PenelitianController::class);

// ===============================
// 🌍 PENGABDIAN
// ===============================
// Route export Excel
Route::get('/pengabdian/export', [PengabdianController::class, 'export'])->name('pengabdian.export');
// Route CRUD pengabdian
Route::resource('pengabdian', PengabdianController::class);

// ===============================
// 🏆 PRESTASI
// ===============================
Route::resource('prestasi', PrestasiController::class);

// ===============================
// 👨‍🏫 CRUD DOSEN
// ===============================
Route::resource('dosen', DosenController::class);

// ===============================
// 🎓 CRUD MAHASISWA
// ===============================
Route::resource('mahasiswa', MahasiswaController::class);

// ===============================
// 📊 Metrics Dashboard (semua angka dinamis)
// ===============================
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Penelitian;
use App\Models\Pengabdian;

Route::get('/admin/metrics/overview', function () {
    return response()->json([
        'dosen'      => Dosen::count(),
        'mahasiswa'  => Mahasiswa::count(),
        'penelitian' => Penelitian::count(),
        'pengabdian' => Pengabdian::count(),
    ]);
})->name('admin.metrics.overview');

// ===============================
// 🧑‍💼 DASHBOARD ADMIN
// ===============================
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
->name('admin.dashboard');

// ===============================
// 🚪 LOGOUT
// ===============================
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ===============================
// 🔑 LOGIN GOOGLE
// ===============================
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('login.google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('login.google.callback');
