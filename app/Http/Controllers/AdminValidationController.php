<?php

namespace App\Http\Controllers;

use App\Models\Mission;
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
        $missions = Mission::where('is_active', true)->get();

        $pendingCount = $submissions->where('status', 'Menunggu')->count();
        $approvedCount = $submissions->where('status', 'Disetujui')->count();
        $rejectedCount = $submissions->where('status', 'Ditolak')->count();
        $totalDistributedXp = $submissions->where('status', 'Disetujui')->sum(fn ($s) => $s->mission->xp_reward ?? 0);

        return view('admin.submissions', compact(
            'submissions',
            'missions',
            'pendingCount',
            'approvedCount',
            'rejectedCount',
            'totalDistributedXp'
        ));
    }

    public function updateStatus(Request $request, Submission $submission)
    {
        $validated = $request->validate([
            'status' => 'required|in:Disetujui,Ditolak',
            'notes' => 'nullable|string|max:500',
        ]);

        $previousStatus = $submission->status;

        $submission->update([
            'status' => $validated['status'],
            'notes' => $validated['notes'] ?? $submission->notes,
            'validated_at' => now(),
        ]);

        if ($validated['status'] === 'Disetujui' && $previousStatus !== 'Disetujui') {
            $submission->user->increment('xp', $submission->mission->xp_reward);
        }

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'status' => $submission->status,
                'xp_reward' => $submission->mission->xp_reward,
                'student_name' => $submission->user->name,
                'message' => 'Status pengajuan berhasil diperbarui.',
            ]);
        }

        return redirect()->route('admin.submissions')
            ->with('success', "Status pengajuan {$submission->user->name} diperbarui menjadi {$submission->status}.");
    }
}
