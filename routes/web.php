<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer.index');
