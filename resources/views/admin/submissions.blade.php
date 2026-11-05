@extends('layouts.app')

@section('title', 'Dashboard Admin Verifikator')

@section('content')
<!-- EPIC 1 (FE Admin): Area Kerja Nayla Assyifa (103032400078) -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Antrean Validasi Pengajuan Misi</h2>
        <p class="text-muted mb-0">Panel Admin / Verifikator Kemahasiswaan (jQuery AJAX Tanpa Reload)</p>
    </div>
</div>

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Mahasiswa</th>
                    <th>Misi & Hadiah XP</th>
                    <th>Bukti & Catatan</th>
                    <th>Status</th>
                    <th class="text-end">Aksi Verifikasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($submissions as $s)
                <tr id="row-{{ $s->id }}">
                    <td>
                        <div class="fw-semibold">{{ $s->user->name ?? '-' }}</div>
                        <small class="text-muted">{{ $s->user->nim ?? '' }} — {{ $s->user->faculty ?? '' }}</small>
                    </td>
                    <td>
                        <div>{{ $s->mission->title ?? '-' }}</div>
                        <span class="badge bg-primary">+{{ $s->mission->xp_reward ?? 0 }} XP</span>
                    </td>
                    <td>
                        <div><code>{{ $s->proof_file }}</code></div>
                        <small class="text-muted">{{ $s->notes }}</small>
                    </td>
                    <td class="status-cell">
                        @if($s->status === 'Disetujui')
                            <span class="badge bg-success">Disetujui</span>
                        @elseif($s->status === 'Menunggu')
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        @else
                            <span class="badge bg-danger">Ditolak</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-success btn-validate" data-id="{{ $s->id }}" data-status="Disetujui">Approve</button>
                        <button class="btn btn-sm btn-outline-danger btn-validate" data-id="{{ $s->id }}" data-status="Ditolak">Reject</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
$('.btn-validate').on('click', function () {
    const id = $(this).data('id');
    const status = $(this).data('status');
    const row = $('#row-' + id);

    $.post('/admin/submissions/' + id + '/status', { status: status }, function (res) {
        if (res.success) {
            const badgeClass = res.status === 'Disetujui' ? 'bg-success' : 'bg-danger';
            row.find('.status-cell').html('<span class="badge ' + badgeClass + '">' + res.status + '</span>');
        }
    });
});
</script>
@endpush
