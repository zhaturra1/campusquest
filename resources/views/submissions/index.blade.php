@extends('layouts.app')

@section('title', 'Pengajuan Bukti Misi')

@section('content')
<!-- EPIC 1 (FE Mahasiswa): Area Kerja Nayla Assyifa (103032400078) -->
<div class="row">
    <div class="col-md-5 mb-4">
        <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold">Unggah Bukti Partisipasi Misi</div>
            <div class="card-body">
                <form action="{{ route('submissions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Pilih Quest / Misi</label>
                        <select name="mission_id" class="form-select" required>
                            <option value="">-- Pilih Misi Kampus --</option>
                            @foreach($missions as $m)
                                <option value="{{ $m->id }}">{{ $m->title }} (+{{ $m->xp_reward }} XP)</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File Sertifikat / Dokumentasi (.pdf, .jpg, .png)</label>
                        <input type="file" name="proof_file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catatan Tambahan</label>
                        <textarea name="notes" class="form-control" rows="3" placeholder="Contoh: Sebagai peserta / panitia divisi acara..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Pengajuan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7 mb-4">
        <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold">Riwayat Pengajuan Misi</div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Misi</th>
                            <th>Mahasiswa</th>
                            <th>Bukti</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($submissions as $s)
                        <tr>
                            <td>
                                <div class="fw-semibold">{{ $s->mission->title ?? '-' }}</div>
                                <small class="text-muted">+{{ $s->mission->xp_reward ?? 0 }} XP</small>
                            </td>
                            <td>{{ $s->user->name ?? '-' }}</td>
                            <td><code>{{ $s->proof_file }}</code></td>
                            <td>
                                @if($s->status === 'Disetujui')
                                    <span class="badge bg-success">Disetujui</span>
                                @elseif($s->status === 'Menunggu')
                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                @else
                                    <span class="badge bg-danger">Ditolak</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
