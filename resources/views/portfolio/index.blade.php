@extends('layouts.app')

@section('title', 'Portofolio Prestasi Digital')

@section('content')
<!-- EPIC 6: Area Kerja Fathurrahman Alfarizi (103032400035) -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Digital Achievement Portfolio</h2>
        <p class="text-muted mb-0">Rekam jejak kegiatan tervalidasi resmi untuk lampiran CV / Magang</p>
    </div>
    <button onclick="window.print()" class="btn btn-primary">📄 Export / Cetak PDF</button>
</div>

<div class="card shadow-sm border-0 p-4 bg-white">
    <div class="border-bottom pb-3 mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h3 class="fw-bold mb-1">{{ $student->name ?? 'Mahasiswa Telkom University' }}</h3>
            <p class="text-muted mb-0">NIM: {{ $student->nim ?? '-' }} | {{ $student->faculty ?? '-' }}</p>
        </div>
        <div class="text-end">
            <span class="badge bg-primary fs-6">Level {{ $student->level ?? 1 }} ({{ number_format($student->xp ?? 0) }} XP)</span>
            <div class="small text-muted mt-1">Telkom University — Tervalidasi Kemahasiswaan</div>
        </div>
    </div>

    <h5 class="fw-bold mb-3">Koleksi Badge Pencapaian</h5>
    <div class="d-flex flex-wrap gap-2 mb-4">
        @if($student && $student->badges->count())
            @foreach($student->badges as $b)
                <span class="badge bg-light text-dark border fs-6 p-2">{{ $b->icon }} {{ $b->name }}</span>
            @endforeach
        @else
            <span class="text-muted">Belum ada badge.</span>
        @endif
    </div>

    <h5 class="fw-bold mb-3">Riwayat Kegiatan & Sertifikat Tervalidasi</h5>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nama Kegiatan / Quest</th>
                    <th>Kategori</th>
                    <th>Poin XP</th>
                    <th>Tanggal Validasi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($verifiedSubmissions as $item)
                <tr>
                    <td class="fw-semibold">{{ $item->mission->title ?? '-' }}</td>
                    <td>{{ $item->mission->category ?? '-' }}</td>
                    <td>+{{ $item->mission->xp_reward ?? 0 }} XP</td>
                    <td>{{ optional($item->validated_at)->format('d M Y') ?? '-' }}</td>
                    <td><span class="badge bg-success">Tervalidasi Resmi</span></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada kegiatan tervalidasi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
