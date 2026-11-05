<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

/**
 * EPIC 1: Validasi Misi oleh Admin / Verifikator Kampus
 * PIC: Nayla Assyifa (103032400078)
 */
class AdminValidationController extends Controller
{
    public function index()
    {
        $submissions = Submission::with(['user', 'mission'])->latest()->get();

        return view('admin.submissions', compact('submissions'));
    }

    public function updateStatus(Request $request, Submission $submission)
    {
        // Area kerja Nayla (berkolaborasi dengan Nathasya untuk trigger XP):
        $validated = $request->validate([
            'status' => 'required|in:Disetujui,Ditolak',
        ]);

        $submission->update([
            'status' => $validated['status'],
            'validated_at' => now(),
        ]);

        if ($validated['status'] === 'Disetujui') {
            $submission->user->increment('xp', $submission->mission->xp_reward);
        }

        return response()->json([
            'success' => true,
            'status' => $submission->status,
            'message' => 'Status pengajuan berhasil diperbarui.',
        ]);
    }
}
