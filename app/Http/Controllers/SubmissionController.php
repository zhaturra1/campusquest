<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * EPIC 1: Manajemen Pengajuan Misi Mahasiswa
 * PIC: Nayla Assyifa (103032400078)
 */
class SubmissionController extends Controller
{
    public function index()
    {
        $missions = Mission::where('is_active', true)->get();
        $submissions = Submission::with(['user', 'mission'])->latest()->get();
        $students = User::where('role', 'mahasiswa')->get();

        return view('submissions.index', compact('missions', 'submissions', 'students'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mission_id' => 'required|exists:missions,id',
            'user_id' => 'nullable|exists:users,id',
            'proof_file_name' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:500',
        ]);

        $student = isset($validated['user_id'])
            ? User::find($validated['user_id'])
            : User::where('role', 'mahasiswa')->first();

        Submission::create([
            'user_id' => $student ? $student->id : 1,
            'mission_id' => $validated['mission_id'],
            'proof_file' => $validated['proof_file_name'] ?? 'Sertifikat_Kegiatan_TelU.pdf',
            'notes' => $validated['notes'] ?? 'Pengajuan bukti partisipasi mahasiswa.',
            'status' => 'Menunggu',
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pengajuan bukti misi berhasil disimpan dan menunggu validasi Admin!',
            ]);
        }

        return redirect()->route('submissions.index')
            ->with('success', 'Pengajuan bukti misi berhasil dikirim dan menunggu validasi Admin!');
    }
}
