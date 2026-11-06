<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\Mission;
use App\Models\Submission;
use App\Models\User;

/**
 * EPIC 2: Sistem Gamifikasi - XP, Level & Badge
 * PIC: Nathasya Yuan Maharani (103032400001)
 */
class DashboardController extends Controller
{
    public function index()
    {
        $student = User::with('badges')->where('role', 'mahasiswa')->orderByDesc('xp')->first();
        $allBadges = Badge::all();
        $activeMissions = Mission::where('is_active', true)->take(3)->get();
        $recentSubmissions = Submission::with(['user', 'mission'])->latest()->take(4)->get();
        $totalApproved = Submission::where('status', 'Disetujui')->count();
        $studentRank = User::where('role', 'mahasiswa')
            ->where('xp', '>', $student ? $student->xp : 0)
            ->count() + 1;

        return view('dashboard', compact(
            'student',
            'allBadges',
            'activeMissions',
            'recentSubmissions',
            'totalApproved',
            'studentRank'
        ));
    }
}
