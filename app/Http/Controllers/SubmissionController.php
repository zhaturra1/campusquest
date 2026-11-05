<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Submission;
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

        return view('submissions.index', compact('missions', 'submissions'));
    }

    public function store(Request $request)
    {
        // Area kerja Nayla: Validasi & simpan pengajuan bukti sertifikat/foto
        $validated = $request->validate([
            'mission_id' => 'required|exists:missions,id',
            'notes' => 'nullable|string|max:500',
        ]);

        Submission::create([
            'user_id' => 1, // Default user aktif sementara sebelum login penuh
            'mission_id' => $validated['mission_id'],
            'proof_file' => 'bukti_kegiatan.pdf',
            'notes' => $validated['notes'] ?? null,
            'status' => 'Menunggu',
        ]);

        return redirect()->route('submissions.index')->with('success', 'Pengajuan bukti misi berhasil dikirim dan menunggu validasi Admin!');
    }
}
