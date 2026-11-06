<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\AdminValidationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Models\User;
use App\Models\Submission;

Route::get('/', function () {
    $studentCount = User::where('role', 'mahasiswa')->count();
    $totalXp = User::where('role', 'mahasiswa')->sum('xp');
    $approvedCount = Submission::where('status', 'Disetujui')->count();
    return view('auth.login', compact('studentCount', 'totalXp', 'approvedCount'));
})->name('home');

Route::get('/login', function () {
    $studentCount = User::where('role', 'mahasiswa')->count();
    $totalXp = User::where('role', 'mahasiswa')->sum('xp');
    $approvedCount = Submission::where('status', 'Disetujui')->count();
    return view('auth.login', compact('studentCount', 'totalXp', 'approvedCount'));
})->name('login');

Route::get('/submissions', [SubmissionController::class, 'index'])->name('submissions.index');
Route::post('/submissions', [SubmissionController::class, 'store'])->name('submissions.store');
Route::get('/admin/submissions', [AdminValidationController::class, 'index'])->name('admin.submissions');
Route::post('/admin/submissions/{submission}/status', [AdminValidationController::class, 'updateStatus'])->name('admin.submissions.status');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');
Route::get('/missions', [MissionController::class, 'index'])->name('missions.index');
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
