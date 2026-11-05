@extends('layouts.app')

@section('title', 'Team Quest & Kolaborasi')

@section('content')
<!-- EPIC 5: Area Kerja Anggita Cahyati Hidayat (103032400041) -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Team Quest (Kolaborasi Mahasiswa)</h2>
        <p class="text-muted mb-0">Bentuk tim, pantau progress kolektif, dan raih peringkat antartim</p>
    </div>
</div>

<div class="row">
    @foreach($teams as $i => $team)
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                        <span class="badge bg-primary mb-1">Peringkat Tim #{{ $i + 1 }}</span>
                        <h4 class="card-title mb-0">{{ $team->name }}</h4>
                    </div>
                    <div class="text-end">
                        <span class="fw-bold text-danger fs-5">{{ number_format($team->total_xp) }} XP</span>
                    </div>
                </div>
                <p class="text-muted small mb-2">🎯 Target Quest: <strong>{{ $team->quest_target }}</strong></p>

                <div class="mb-3">
                    <div class="d-flex justify-content-between small mb-1">
                        <span>Progress Tim</span>
                        <span>{{ $team->progress_percent }}%</span>
                    </div>
                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-primary" style="width: {{ $team->progress_percent }}%"></div>
                    </div>
                </div>

                <h6 class="fw-semibold small text-uppercase text-muted mb-2">Anggota Tim:</h6>
                <ul class="list-group list-group-flush">
                    @foreach($team->members as $member)
                        <li class="list-group-item px-0 py-1 d-flex justify-content-between align-items-center">
                            <span>{{ $member->name }} <small class="text-muted">({{ $member->nim }})</small></span>
                            <span class="badge bg-light text-dark border">{{ $member->pivot->role_in_team }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
