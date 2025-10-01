<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AchievementController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('lecturers', LecturerController::class);
Route::resource('students', StudentController::class);
Route::resource('research', ResearchController::class);
Route::resource('services', ServiceController::class);
Route::resource('achievements', AchievementController::class);
