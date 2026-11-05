<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;

/**
 * EPIC 5: Team Quest / Fitur Kolaborasi
 * PIC: Anggita Cahyati Hidayat (103032400041)
 */
class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with(['leader', 'members'])->orderByDesc('total_xp')->get();
        $students = User::where('role', 'mahasiswa')->get();

        return view('teams.index', compact('teams', 'students'));
    }
}
