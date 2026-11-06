@extends('layouts.app')

@section('title', 'Manajemen Tim & Kolaborasi | CampusQuest')

@section('content')
@php
    $primaryTeam = $teams->first();
    $otherTeams = $teams->slice(1);
    $totalTeamXp = $teams->sum('total_xp');
    $recommendStudent = $students->firstWhere('nim', '103032400123') ?? $students->last();
@endphp

<div class="flex flex-col w-full">
    <div role="status" aria-live="polite" class="fixed bottom-8 right-8 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toast-notification">
        <div class="flex items-center gap-3 px-5 py-3.5 bg-surface-card rounded-full shadow-[0_12px_32px_-4px_rgba(108,92,231,0.18)] border border-border-subtle">
            <div class="w-8 h-8 rounded-full bg-badge-emerald/15 flex items-center justify-center text-badge-emerald">
                <span class="material-symbols-outlined text-[18px]" aria-hidden="true">check_circle</span>
            </div>
            <p class="font-label-md text-label-md text-text-primary" id="toast-message">Aksi berhasil dilakukan!</p>
        </div>
    </div>

    <header class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-8">
        <div class="max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm uppercase tracking-wider mb-2.5">
                <span class="material-symbols-outlined text-[14px]" aria-hidden="true">groups</span>
                Modul Kolaborasi Multi-Disiplin • PIC: Anggita Cahyati Hidayat
            </div>
            <h1 class="font-headline-xl-mobile sm:text-headline-xl text-text-primary tracking-tight">Manajemen Tim &amp; Kolaborasi</h1>
            <p class="font-body-lg text-body-lg text-text-muted mt-2">
                Bentuk tim kolaborasi Kelompok 5, undang rekan mahasiswa via NIM, dan kerjakan misi bersama untuk melipatgandakan akumulasi XP kelompok.
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="px-5 py-3 min-h-[44px] rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-lg text-label-lg shadow-xs transition-all flex items-center gap-2" onclick="focusInviteInput()">
                <span class="material-symbols-outlined text-primary text-[20px]" aria-hidden="true">person_add</span>
                <span>Undang Anggota via NIM</span>
            </button>
            <a href="{{ route('missions.index') }}" class="px-6 py-3 min-h-[44px] rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-lg text-label-lg shadow-[0_4px_14px_rgba(108,92,231,0.3)] hover:opacity-95 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">explore</span>
                <span>Pilih Misi Kelompok</span>
            </a>
        </div>
    </header>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-surface-card rounded-[24px] p-6 shadow-xs flex items-start justify-between relative overflow-hidden">
            <div class="flex flex-col justify-between h-full">
                <div>
                    <span class="font-label-md text-label-md text-text-muted">Tim Aktif Kelompok 5</span>
                    <h2 class="font-headline-lg text-headline-lg text-text-primary mt-1.5">{{ $teams->count() }} Tim Berjalan</h2>
                </div>
                <div class="mt-4 flex flex-wrap items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                        {{ $students->count() }} Mahasiswa Terdaftar
                    </span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-pastel-lavender-start text-primary flex items-center justify-center shadow-sm">
                <span class="material-symbols-outlined text-[24px]" aria-hidden="true">diversity_3</span>
            </div>
        </div>

        <div class="bg-surface-card rounded-[24px] p-6 shadow-xs flex items-start justify-between relative overflow-hidden">
            <div class="flex flex-col justify-between h-full">
                <div>
                    <span class="font-label-md text-label-md text-text-muted">Akumulasi XP Tim</span>
                    <div class="flex items-baseline gap-2 mt-1.5">
                        <h2 class="font-headline-xl text-headline-xl text-text-primary">{{ number_format($totalTeamXp) }}</h2>
                        <span class="font-label-md text-label-md text-primary font-bold">XP</span>
                    </div>
                </div>
                <div class="mt-4 flex items-center gap-1.5 text-badge-emerald font-label-md text-label-md">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">trending_up</span>
                    <span>Data langsung dari tabel teams</span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-badge-emerald/10 text-badge-emerald flex items-center justify-center shadow-sm">
                <span class="material-symbols-outlined text-[24px]" aria-hidden="true">workspace_premium</span>
            </div>
        </div>

        <div class="bg-surface-card rounded-[24px] p-6 shadow-xs flex items-start justify-between relative overflow-hidden">
            <div class="flex flex-col justify-between h-full">
                <div>
                    <span class="font-label-md text-label-md text-text-muted">Undangan Kolaborasi</span>
                    <h2 class="font-headline-lg text-headline-lg text-text-primary mt-1.5">1 Permintaan</h2>
                </div>
                <div class="mt-4 flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-container font-label-sm text-label-sm font-bold">
                        Menunggu Respon Anda
                    </span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-secondary-fixed text-on-secondary-container flex items-center justify-center shadow-sm">
                <span class="material-symbols-outlined text-[24px]" aria-hidden="true">mark_email_unread</span>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <div class="lg:col-span-8 flex flex-col gap-8">
            @if($primaryTeam)
            <section class="bg-surface-card rounded-[24px] p-6 sm:p-8 shadow-xs relative overflow-hidden">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-border-subtle/50">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 p-[4px] rounded-full flex items-center justify-center shrink-0 shadow-[0px_8px_20px_-4px_rgba(108,92,231,0.4)]"
                             style="background-image: linear-gradient(45deg, rgb(108, 92, 231) 0%, rgb(162, 155, 254) 100%);"
                             aria-hidden="true">
                            <div class="bg-white w-full h-full rounded-full flex items-center justify-center">
                                <img src="{{ asset('/images/badges/role-crest-shield.svg') }}" alt="" width="32" height="32" class="w-8 h-8 object-contain" />
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2.5 flex-wrap">
                                <h2 class="font-headline-lg text-headline-lg text-text-primary">{{ $primaryTeam->name }}</h2>
                                <span class="px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
                                    Tim Utama Kelompok 5
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 text-text-muted font-body-sm text-body-sm mt-1">
                                <span class="flex items-center gap-1 text-badge-emerald font-semibold">
                                    <span class="w-2 h-2 rounded-full bg-badge-emerald"></span>
                                    Status: Aktif
                                </span>
                                <span>•</span>
                                <span>{{ $primaryTeam->members->count() }} Anggota Terdaftar</span>
                                <span>•</span>
                                <span>Ketua: {{ $primaryTeam->leader->name ?? 'Anggita Cahyati Hidayat' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" aria-label="Salin Tautan Tim" class="w-11 h-11 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant flex items-center justify-center transition-colors" onclick="triggerAction('Tautan kolaborasi {{ $primaryTeam->name }} disalin ke papan klip!')" title="Salin Tautan Tim">
                            <span class="material-symbols-outlined text-[20px]" aria-hidden="true">share</span>
                        </button>
                    </div>
                </div>

                <div class="mt-6 p-5 rounded-[20px] bg-gradient-to-r from-pastel-lavender-start to-pastel-lavender-end flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-full bg-surface-card flex items-center justify-center text-primary shadow-sm flex-shrink-0 mt-0.5">
                            <span class="material-symbols-outlined text-[22px]" aria-hidden="true">workspace_premium</span>
                        </div>
                        <div>
                            <span class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-bold">Misi Target Tim</span>
                            <h3 class="font-headline-sm text-headline-sm text-text-primary mt-0.5">{{ $primaryTeam->quest_target }}</h3>
                            <p class="font-body-sm text-body-sm text-text-muted mt-0.5">Kolaborasi lintas fakultas Telkom University</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 self-start md:self-auto flex-shrink-0">
                        <div class="px-3.5 py-1.5 rounded-full bg-surface-card shadow-sm flex items-center gap-1.5 text-primary font-label-md text-label-md">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">bolt</span>
                            <span>{{ number_format($primaryTeam->total_xp) }} XP Tim</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <h3 class="font-label-lg text-label-lg text-text-primary">Milestone Progres Bersama</h3>
                            <p class="font-body-sm text-body-sm text-text-muted">Progres pengerjaan misi kelompok saat ini</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-headline-sm text-headline-sm text-primary">{{ $primaryTeam->progress_percent }}%</span>
                            <span class="font-label-md text-label-md text-text-muted">Selesai</span>
                        </div>
                    </div>
                    <div class="w-full h-3 bg-surface-container rounded-full overflow-hidden mb-6 p-0.5" role="progressbar" aria-valuenow="{{ $primaryTeam->progress_percent }}" aria-valuemin="0" aria-valuemax="100" aria-label="Progres penyelesaian misi tim">
                        <div class="h-full bg-gradient-to-r from-primary-container via-badge-violet to-secondary rounded-full transition-all duration-700" style="width: {{ $primaryTeam->progress_percent }}%;"></div>
                    </div>
                </div>

                <div class="mt-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="font-label-lg text-label-lg text-text-primary">Daftar Anggota Tim &amp; Kontribusi</h3>
                            <p class="font-body-sm text-body-sm text-text-muted">Anggota resmi Kelompok 5 yang tergabung dalam {{ $primaryTeam->name }}</p>
                        </div>
                        <span class="font-label-sm text-label-sm text-text-muted uppercase bg-surface-sidebar px-3 py-1 rounded-full">{{ $primaryTeam->members->count() }} Anggota</span>
                    </div>

                    <div class="flex flex-col gap-3">
                        @forelse($primaryTeam->members as $member)
                            @php
                                $mInit = collect(explode(' ', $member->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
                                $roleInTeam = $member->pivot->role_in_team ?? 'Anggota';
                            @endphp
                            <div class="p-4 rounded-[18px] bg-surface-bright hover:bg-pastel-lavender-start/40 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-12 h-12 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center font-headline-sm font-bold shrink-0" aria-hidden="true">
                                        {{ $mInit }}
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <h4 class="font-label-lg text-label-lg text-text-primary">{{ $member->name }}</h4>
                                            <span class="px-2.5 py-0.5 rounded-full {{ $roleInTeam === 'Ketua' ? 'bg-primary text-on-primary' : 'bg-pastel-lavender-start text-primary' }} font-label-sm text-label-sm">
                                                {{ $roleInTeam }}
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-2 text-text-muted font-body-sm text-body-sm mt-0.5">
                                            <span>{{ $member->faculty }}</span>
                                            <span>•</span>
                                            <span>NIM: {{ $member->nim }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 justify-between sm:justify-end">
                                    <div class="text-right">
                                        <div class="flex items-center gap-1 justify-end font-label-lg text-label-lg text-primary">
                                            <span class="material-symbols-outlined text-[16px]" aria-hidden="true">bolt</span>
                                            <span>{{ number_format($member->xp) }} XP</span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Level {{ $member->level }}</span>
                                    </div>
                                    <a href="{{ route('portfolio.index', ['nim' => $member->nim]) }}" aria-label="Lihat Portofolio {{ $member->name }}" class="w-10 h-10 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant flex items-center justify-center transition-colors" title="Lihat Portofolio">
                                        <span class="material-symbols-outlined text-[18px]" aria-hidden="true">chevron_right</span>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="font-body-sm text-body-sm text-text-muted p-4">Belum ada anggota terdaftar di tim ini.</p>
                        @endforelse

                        <button type="button" class="p-4 rounded-[18px] bg-pastel-lavender-start/30 hover:bg-pastel-lavender-start/80 transition-all flex items-center justify-between text-left group" onclick="focusInviteInput()">
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-full bg-surface-card flex items-center justify-center text-primary group-hover:scale-105 transition-transform shadow-sm">
                                    <span class="material-symbols-outlined text-[24px]" aria-hidden="true">person_add</span>
                                </div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-primary font-bold">+ Tambah Anggota Kelompok</p>
                                    <p class="font-body-sm text-body-sm text-text-muted">Undang rekan mahasiswa Kelompok 5 lainnya melalui NIM</p>
                                </div>
                            </div>
                            <span class="px-4 py-2 rounded-full bg-primary text-on-primary font-label-md text-label-md group-hover:shadow-md transition-all">
                                Undang Sekarang
                            </span>
                        </button>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-border-subtle/50 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-primary text-[18px]" aria-hidden="true">folder_shared</span>
                        <span>Terhubung dengan sistem pengajuan bukti misi Kelompok 5</span>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="{{ route('submissions.index') }}" class="px-5 py-2.5 min-h-[44px] rounded-full bg-primary text-on-primary hover:opacity-95 font-label-md text-label-md shadow-sm transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">cloud_upload</span>
                            <span>Unggah Bukti Bersama (LPJ/Sertifikat)</span>
                        </a>
                    </div>
                </div>
            </section>
            @endif

            <section class="bg-surface-card rounded-[24px] p-6 shadow-xs">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Tim Lainnya di Kelompok 5</h3>
                        <p class="font-body-sm text-body-sm text-text-muted">Daftar skuad kolaborasi aktif di basis data</p>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    @forelse($otherTeams as $team)
                        <div class="p-5 rounded-[20px] bg-surface-bright flex flex-col md:flex-row md:items-center justify-between gap-5 hover:bg-pastel-lavender-start/30 transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-[16px] bg-badge-sky/15 text-badge-sky flex items-center justify-center font-headline-sm text-headline-sm font-bold flex-shrink-0" aria-hidden="true">
                                    TC
                                </div>
                                <div>
                                    <div class="flex items-center gap-2.5 flex-wrap">
                                        <h4 class="font-label-lg text-label-lg text-text-primary font-bold">{{ $team->name }}</h4>
                                        <span class="px-2.5 py-0.5 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold">
                                            Ketua: {{ $team->leader->name ?? 'Mahasiswa' }}
                                        </span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-text-muted mt-0.5">Target: {{ $team->quest_target }}</p>
                                    <div class="flex flex-wrap items-center gap-3 text-text-muted font-body-sm text-body-sm mt-1">
                                        <span>{{ $team->members->count() }} Anggota Aktif</span>
                                        <span>•</span>
                                        <span>Akumulasi: {{ number_format($team->total_xp) }} XP</span>
                                        <span>•</span>
                                        <span class="text-primary font-semibold">Progres: {{ $team->progress_percent }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 self-end md:self-center">
                                <a href="{{ route('submissions.index') }}" class="px-4 py-2.5 min-h-[40px] rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-md text-label-md shadow-sm transition-all flex items-center gap-1.5">
                                    <span>Ajukan Bukti Tim</span>
                                    <span class="material-symbols-outlined text-[16px]" aria-hidden="true">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="font-body-sm text-body-sm text-text-muted p-4 text-center">Belum ada tim tambahan lainnya.</p>
                    @endforelse
                </div>
            </section>
        </div>

        <div class="lg:col-span-4 flex flex-col gap-6">
            <section class="bg-surface-card rounded-[24px] p-6 shadow-xs relative">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">person_search</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Undang Mahasiswa</h3>
                    </div>
                    <span class="font-label-sm text-label-sm text-primary bg-pastel-lavender-start px-2 py-0.5 rounded-full font-bold">Instan</span>
                </div>
                <p class="font-body-sm text-body-sm text-text-muted mb-4">
                    Pilih rekan mahasiswa Kelompok 5 untuk mengirimkan undangan kolaborasi tim.
                </p>
                <div class="relative mb-3">
                    <label for="invite-search-input" class="sr-only">Cari via NIM atau nama mahasiswa</label>
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-text-muted text-[18px]" aria-hidden="true">search</span>
                    <input class="w-full pl-10 pr-4 py-2.5 bg-surface-bright text-text-primary placeholder:text-text-muted rounded-[14px] font-body-md text-body-md focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all" id="invite-search-input" placeholder="Cari via NIM (1030324...) atau nama..." type="text" value="{{ $recommendStudent->name ?? 'Nur Syadira' }}"/>
                </div>
                <div class="mb-4">
                    <label for="invite-role-select" class="block font-label-sm text-label-sm text-text-muted mb-1.5 uppercase font-bold">Posisi Peran di Tim</label>
                    <div class="relative">
                        <select class="w-full px-3.5 py-2.5 bg-surface-bright text-text-primary rounded-[14px] font-body-md text-body-md appearance-none cursor-pointer focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all" id="invite-role-select">
                            <option value="Anggota Teknis / Developer">Anggota Teknis (Developer / AI)</option>
                            <option value="Desainer UI/UX">Desainer UI/UX</option>
                            <option value="Riset & Analisis Data">Riset &amp; Analisis Data</option>
                            <option value="Dokumentasi & LPJ">Dokumentasi &amp; LPJ</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[18px]" aria-hidden="true">expand_more</span>
                    </div>
                </div>

                @if($recommendStudent)
                <div class="p-3.5 rounded-[16px] bg-pastel-lavender-start/40 flex flex-wrap items-center justify-between gap-2.5 mb-4 transition-all min-w-0" id="autocomplete-box">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <div class="w-9 h-9 rounded-full bg-primary/15 text-primary flex items-center justify-center font-label-md text-label-md font-bold shrink-0" aria-hidden="true">
                            NS
                        </div>
                        <div class="min-w-0">
                            <p class="font-label-md text-label-md text-text-primary font-bold leading-tight truncate">{{ $recommendStudent->name }}</p>
                            <p class="font-body-sm text-body-sm text-text-muted leading-tight truncate">NIM {{ $recommendStudent->nim }}</p>
                        </div>
                    </div>
                    <button type="button" class="px-3 py-1.5 min-h-[38px] rounded-full bg-primary text-on-primary hover:bg-primary/90 font-label-sm text-label-sm transition-all shadow-sm flex items-center gap-1 shrink-0" id="btn-invite-student" onclick="inviteStudent('{{ addslashes($recommendStudent->name) }}')">
                        <span class="material-symbols-outlined text-[14px]" aria-hidden="true">add</span>
                        <span>Undang</span>
                    </button>
                </div>
                @endif
            </section>

            <section class="bg-surface-card rounded-[24px] p-6 shadow-xs">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[20px]" aria-hidden="true">mail</span>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Permintaan Masuk</h3>
                    </div>
                    <span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-container font-label-sm text-label-sm font-bold" id="badge-invite-count">1 Baru</span>
                </div>
                <div class="flex flex-col gap-3" id="incoming-invite-container">
                    <div class="p-4 rounded-[18px] bg-gradient-to-br from-pastel-lavender-start to-surface-card flex flex-col gap-3 transition-all" id="card-invite-fintech">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-label-md flex-shrink-0 shadow-sm" aria-hidden="true">
                                TC
                            </div>
                            <div>
                                <h4 class="font-label-md text-label-md text-text-primary font-bold">Tel-U Cyber Squad</h4>
                                <p class="font-body-sm text-body-sm text-text-muted">Diundang oleh <strong class="text-text-primary">Nur Syadira</strong> (NIM 103032400123)</p>
                            </div>
                        </div>
                        <div class="px-3 py-2 rounded-[12px] bg-surface-card/80 text-text-muted font-body-sm text-body-sm">
                            <span class="font-label-sm text-label-sm text-primary block uppercase font-bold">Misi Target</span>
                            Bakti Sosial Desa Binaan Pangalengan
                        </div>
                        <div class="flex items-center gap-2.5 pt-1">
                            <button type="button" class="flex-1 py-2.5 min-h-[40px] rounded-full bg-badge-emerald text-on-primary font-label-sm text-label-sm font-semibold hover:opacity-90 transition-all flex items-center justify-center gap-1.5 shadow-sm" onclick="acceptInvite('card-invite-fintech')">
                                <span class="material-symbols-outlined text-[16px]" aria-hidden="true">check</span>
                                <span>Terima</span>
                            </button>
                            <button type="button" class="px-4 py-2.5 min-h-[40px] rounded-full bg-surface-sidebar hover:bg-error-container text-on-surface-variant hover:text-on-error-container font-label-sm text-label-sm font-semibold transition-all" onclick="declineInvite('card-invite-fintech')">
                                Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-surface-card rounded-[24px] p-6 shadow-xs">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-badge-gold text-[20px]" aria-hidden="true">trophy</span>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Peringkat Tim Kampus</h3>
                    </div>
                    <span class="font-label-sm text-label-sm text-text-muted">Aktif</span>
                </div>
                <p class="font-body-sm text-body-sm text-text-muted mb-4">Peringkat akumulasi XP tim Kelompok 5</p>
                <div class="flex flex-col gap-2.5">
                    @foreach($teams as $idx => $team)
                        <div class="p-3.5 rounded-[16px] {{ $idx === 0 ? 'bg-[#FEFCE8]' : 'bg-pastel-lavender-start' }} flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div class="w-7 h-7 rounded-full {{ $idx === 0 ? 'bg-badge-gold text-on-primary' : 'bg-primary text-on-primary' }} font-headline-sm text-headline-sm font-bold flex items-center justify-center text-[12px] shadow-sm">
                                    {{ $idx + 1 }}
                                </div>
                                <div>
                                    <p class="font-label-md text-label-md text-text-primary font-bold">{{ $team->name }}</p>
                                    <p class="font-body-sm text-body-sm text-text-muted">{{ $team->members->count() }} Anggota</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="font-label-md text-label-md text-primary font-bold">{{ number_format($team->total_xp) }} XP</span>
                                <span class="block font-body-sm text-body-sm text-badge-emerald">{{ $team->progress_percent }}% Progres</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('leaderboard') }}" class="w-full mt-4 py-2.5 min-h-[44px] rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-primary font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center gap-1.5">
                    <span>Lihat Leaderboard Lengkap</span>
                    <span class="material-symbols-outlined text-[16px]" aria-hidden="true">open_in_new</span>
                </a>
            </section>
        </div>
    </div>

    <div class="mt-8">
        <x-gamification.role-badges />
    </div>

    <script>
        function showNotification(message) {
            const toast = document.getElementById('toast-notification');
            const text = document.getElementById('toast-message');
            if (!toast || !text) return;
            text.textContent = message;
            toast.classList.remove('opacity-0', 'translate-y-24', 'pointer-events-none');
            toast.classList.add('opacity-100', 'translate-y-0');
            setTimeout(() => {
                toast.classList.remove('opacity-100', 'translate-y-0');
                toast.classList.add('opacity-0', 'translate-y-24', 'pointer-events-none');
            }, 3500);
        }

        function triggerAction(desc) {
            showNotification(desc);
        }

        function focusInviteInput() {
            const input = document.getElementById('invite-search-input');
            if (input) {
                input.focus();
                input.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        function inviteStudent(name) {
            const roleSelect = document.getElementById('invite-role-select');
            const selectedRole = roleSelect ? roleSelect.value : 'Anggota Tim';
            showNotification('Undangan berhasil dikirimkan kepada ' + name + ' sebagai ' + selectedRole + '!');
            const btn = document.getElementById('btn-invite-student');
            if (btn) {
                btn.textContent = 'Terkirim';
                btn.disabled = true;
                btn.classList.remove('bg-primary');
                btn.classList.add('bg-badge-emerald');
            }
        }

        function acceptInvite(cardId) {
            const card = document.getElementById(cardId);
            if (card) {
                card.remove();
                showNotification('Selamat! Anda telah menerima undangan kolaborasi Tel-U Cyber Squad.');
                updateInviteBadge();
            }
        }

        function declineInvite(cardId) {
            const card = document.getElementById(cardId);
            if (card) {
                card.remove();
                showNotification('Undangan tim telah ditolak.');
                updateInviteBadge();
            }
        }

        function updateInviteBadge() {
            const container = document.getElementById('incoming-invite-container');
            const badge = document.getElementById('badge-invite-count');
            if (container && container.children.length === 0) {
                container.innerHTML = '<div class="p-6 text-center text-text-muted font-body-sm text-body-sm bg-surface-bright rounded-[16px]">Tidak ada permintaan undangan masuk saat ini.</div>';
                if (badge) {
                    badge.textContent = '0';
                    badge.classList.remove('bg-secondary-fixed', 'text-on-secondary-container');
                    badge.classList.add('bg-surface-sidebar', 'text-text-muted');
                }
            }
        }
    </script>
</div>
@endsection
