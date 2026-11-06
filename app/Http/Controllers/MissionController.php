<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Submission;

/**
 * EPIC 4: Campus Exploration / Katalog Quest
 * PIC: Naira Cahaya Putri Dermawan Sinaga (103032400100)
 */
class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::where('is_active', true)->orderByDesc('xp_reward')->get();
        $totalXpAvailable = $missions->sum('xp_reward');
        $completedMissionsCount = Submission::where('status', 'Disetujui')->count();

        return view('missions.index', compact('missions', 'totalXpAvailable', 'completedMissionsCount'));
    }
}
