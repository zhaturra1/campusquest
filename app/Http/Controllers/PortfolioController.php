<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;

/**
 * EPIC 6: Digital Achievement Portfolio
 * PIC: Fathurrahman Alfarizi (103032400035)
 */
class PortfolioController extends Controller
{
    public function index()
    {
        $student = User::with('badges')->where('role', 'mahasiswa')->first();
        $verifiedSubmissions = Submission::with('mission')
            ->where('status', 'Disetujui')
            ->get();

        return view('portfolio.index', compact('student', 'verifiedSubmissions'));
    }
}
