<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * EPIC 6: Digital Achievement Portfolio
 * PIC: Fathurrahman Alfarizi (103032400035)
 */
class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $students = User::with('badges')->where('role', 'mahasiswa')->orderByDesc('xp')->get();
        $selectedNim = $request->query('nim');

        $student = $selectedNim
            ? $students->firstWhere('nim', $selectedNim)
            : $students->firstWhere('nim', '103032400035'); // Default PIC Epic 6: Fathurrahman Alfarizi

        if (! $student) {
            $student = $students->first();
        }

        $verifiedSubmissions = Submission::with(['mission', 'user'])
            ->where('status', 'Disetujui')
            ->latest('validated_at')
            ->get();

        return view('portfolio.index', compact('student', 'students', 'verifiedSubmissions'));
    }
}
