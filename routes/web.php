<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\AdminValidationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return redirect('/dashboard');
});

// =========================================================================
// EPIC 1: Manajemen Pengajuan & Validasi Misi (PIC: Nayla - 103032400078)
// =========================================================================
Route::get('/submissions', [SubmissionController::class, 'index'])->name('submissions.index');
Route::post('/submissions', [SubmissionController::class, 'store'])->name('submissions.store');
Route::get('/admin/submissions', [AdminValidationController::class, 'index'])->name('admin.submissions');
Route::post('/admin/submissions/{submission}/status', [AdminValidationController::class, 'updateStatus'])->name('admin.submissions.status');

// =========================================================================
// EPIC 2: Sistem Gamifikasi - XP, Level & Badge (PIC: Nathasya - 103032400001)
// =========================================================================
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// =========================================================================
// EPIC 3: Leaderboard & Peringkat (PIC: Syadira - 103032400123)
// =========================================================================
Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');

// =========================================================================
// EPIC 4: Campus Exploration / Katalog Quest (PIC: Naira - 103032400100)
// =========================================================================
Route::get('/missions', [MissionController::class, 'index'])->name('missions.index');

// =========================================================================
// EPIC 5: Team Quest / Fitur Kolaborasi (PIC: Anggita - 103032400041)
// =========================================================================
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

// =========================================================================
// EPIC 6: Digital Achievement Portfolio (PIC: Fathur - 103032400035)
// =========================================================================
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
