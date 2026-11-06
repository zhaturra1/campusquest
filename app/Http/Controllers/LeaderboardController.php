<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;

/**
 * EPIC 3: Leaderboard & Peringkat
 * PIC: Nur Syadira (103032400123)
 */
class LeaderboardController extends Controller
{
    public function index()
    {
        $players = User::where('role', 'mahasiswa')
            ->withCount(['submissions as approved_count' => function ($query) {
                $query->where('status', 'Disetujui');
            }])
            ->orderByDesc('xp')
            ->get();

        $faculties = $players->groupBy('faculty')->map(function ($group, $faculty) {
            return [
                'name' => $faculty,
                'total_xp' => $group->sum('xp'),
                'student_count' => $group->count(),
            ];
        })->sortByDesc('total_xp')->values();

        return view('leaderboard', compact('players', 'faculties'));
    }
}
