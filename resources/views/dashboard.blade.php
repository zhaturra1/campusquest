@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa | CampusQuest')

@section('content')
@php
    $studentName = $student->name ?? 'Nathasya Yuan Maharani';
    $firstName = explode(' ', $studentName)[0];
    $currentXp = $student->xp ?? 1950;
    $currentLevel = $student->level ?? 8;
    $nextLevelXp = 2500;
    $progressPercent = min(100, (int) round(($currentXp / $nextLevelXp) * 100));
    $remainingXp = max(0, $nextLevelXp - $currentXp);
    $earnedBadges = $student ? $student->badges : collect();
@endphp

<div class="flex flex-col w-full space-y-8">
    <section class="bg-surface-card rounded-[24px] p-6 sm:p-8 shadow-xs border border-border-subtle/50 space-y-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="space-y-1.5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md">
                    <span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;" aria-hidden="true">school</span>
                    <span>{{ $student->faculty ?? 'Fakultas Informatika' }} • NIM {{ $student->nim ?? '103032400001' }}</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-text-primary tracking-tight font-bold">
                    Selamat Datang Kembali, {{ $firstName }}! 👋
                </h1>
                <p class="font-body-md text-body-md text-text-muted max-w-xl leading-relaxed">
                    Butuh <span class="text-primary font-semibold">{{ number_format($remainingXp) }} XP lagi</span> untuk naik ke Level {{ $currentLevel + 1 }} dan melengkapi capaian portofolio semester ini.
                </p>
            </div>
            <div class="shrink-0">
                <a class="inline-flex items-center gap-2 px-6 py-3 min-h-[44px] rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 hover:-translate-y-0.5 transition-all" href="{{ route('missions.index') }}">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">explore</span>
                    <span>Jelajahi Misi</span>
                </a>
            </div>
        </div>

        <div class="pt-4 border-t border-surface-container/60 space-y-2.5">
            <div class="flex flex-wrap items-center justify-between gap-3 text-label-md font-label-md">
                <div class="flex items-center gap-2.5">
                    <span class="px-2.5 py-0.5 rounded-full bg-primary-container text-on-primary font-semibold text-label-sm">Level {{ $currentLevel }}</span>
                    <span class="text-text-primary font-semibold">Explorer Scholar</span>
                    <span class="text-text-muted font-normal">• PIC Gamifikasi Kelompok 5</span>
                </div>
                <div class="flex items-center gap-2 text-text-muted">
                    <span class="text-primary font-bold font-body-md">{{ number_format($currentXp) }}</span>
                    <span>/ {{ number_format($nextLevelXp) }} XP</span>
                    <span class="text-badge-emerald font-semibold ml-1.5">({{ $progressPercent }}%)</span>
                </div>
            </div>
            <div class="w-full h-2.5 bg-surface-container rounded-full overflow-hidden p-0.5" role="progressbar" aria-valuenow="{{ $progressPercent }}" aria-valuemin="0" aria-valuemax="100" aria-label="Progres XP ke Level berikutnya">
                <div class="h-full rounded-full bg-gradient-to-r from-primary-container to-secondary transition-all duration-1000 ease-out" style="width: {{ $progressPercent }}%;"></div>
            </div>
            <div class="flex justify-between font-label-sm text-label-sm text-text-muted pt-0.5">
                <span>Level {{ $currentLevel }}</span>
                <span>{{ number_format($remainingXp) }} XP tersisa untuk Level {{ $currentLevel + 1 }}</span>
                <span>Level {{ $currentLevel + 1 }} ({{ number_format($nextLevelXp) }} XP)</span>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-surface-card rounded-[20px] p-6 shadow-xs border border-border-subtle/40 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
            <div class="flex items-center justify-between mb-4">
                <span class="font-label-md text-label-md text-text-muted">Pengajuan Disetujui</span>
                <div class="w-9 h-9 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">task_alt</span>
                </div>
            </div>
            <div>
                <div class="text-[30px] font-bold text-text-primary leading-tight">{{ $totalApproved }}</div>
                <p class="font-body-sm text-body-sm text-badge-emerald mt-1 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]" aria-hidden="true">verified</span> Terverifikasi Kemahasiswaan Tel-U
                </p>
            </div>
        </div>

        <div class="bg-surface-card rounded-[20px] p-6 shadow-xs border border-border-subtle/40 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
            <div class="flex items-center justify-between mb-4">
                <span class="font-label-md text-label-md text-text-muted">Peringkat Kelompok 5</span>
                <div class="w-9 h-9 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant flex items-center justify-center">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">leaderboard</span>
                </div>
            </div>
            <div>
                <div class="text-[30px] font-bold text-text-primary leading-tight">#{{ $studentRank }}</div>
                <p class="font-body-sm text-body-sm text-badge-emerald mt-1 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]" aria-hidden="true">arrow_upward</span> Klasemen aktif berdasarkan XP database
                </p>
            </div>
        </div>

        <div class="bg-surface-card rounded-[20px] p-6 shadow-xs border border-border-subtle/40 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
            <div class="flex items-center justify-between mb-4">
                <span class="font-label-md text-label-md text-text-muted">Badge Diraih</span>
                <div class="w-9 h-9 rounded-full bg-[#FEF9E7] text-badge-gold flex items-center justify-center">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">military_tech</span>
                </div>
            </div>
            <div>
                <div class="text-[30px] font-bold text-text-primary leading-tight">{{ $earnedBadges->count() }} <span class="text-[16px] text-text-muted font-normal">/ {{ $allBadges->count() }}</span></div>
                <p class="font-body-sm text-body-sm text-text-muted mt-1">Lencana pencapaian terverifikasi</p>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start pt-2" id="active-quests">
        <div class="lg:col-span-7 space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-headline-md text-headline-md text-text-primary">Misi Aktif Prioritas</h2>
                    <p class="font-body-sm text-body-sm text-text-muted mt-0.5">Daftar misi kampus yang terbuka untuk diikuti pekan ini</p>
                </div>
                <a class="font-label-md text-label-md text-primary hover:underline inline-flex items-center gap-1" href="{{ route('missions.index') }}">
                    Lihat Semua Misi <span class="material-symbols-outlined text-[16px]" aria-hidden="true">arrow_forward</span>
                </a>
            </div>

            @forelse($activeMissions as $mission)
                <div class="bg-surface-card rounded-[24px] p-6 sm:p-7 shadow-xs border border-border-subtle/50 space-y-5 hover:shadow-sm transition-all">
                    <div class="space-y-2.5">
                        <div class="flex items-center justify-between gap-2 flex-wrap">
                            <span class="px-3 py-1 rounded-full bg-[#FEF9E7] text-badge-gold font-label-md text-label-md flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[14px]" aria-hidden="true">auto_stories</span>
                                <span>{{ $mission->category }}</span>
                            </span>
                            <span class="px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
                                +{{ $mission->xp_reward }} XP
                            </span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary pt-1">
                            {{ $mission->title }}
                        </h3>
                        <p class="font-body-sm text-body-sm text-text-muted leading-relaxed">
                            {{ $mission->description }}
                        </p>
                    </div>
                    <div class="space-y-2 pt-2 border-t border-surface-container/50">
                        <div class="flex items-center justify-between font-label-sm text-label-sm">
                            <span class="text-text-muted flex items-center gap-1 font-medium">
                                <span class="material-symbols-outlined text-[14px]" aria-hidden="true">location_on</span> {{ $mission->location }}
                            </span>
                            <span class="text-badge-emerald font-semibold">Batas: {{ \Carbon\Carbon::parse($mission->deadline)->format('d M Y') }}</span>
                        </div>
                    </div>
                    <div class="pt-2 flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm">
                            <div class="flex -space-x-2" aria-hidden="true">
                                <div class="w-7 h-7 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-label-sm text-label-sm font-bold ring-2 ring-surface-card">NY</div>
                                <div class="w-7 h-7 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary font-label-sm text-label-sm font-bold ring-2 ring-surface-card">FA</div>
                            </div>
                            <span class="ml-1 font-body-sm text-body-sm text-text-muted">Terbuka untuk Kelompok 5</span>
                        </div>
                        <a href="{{ route('submissions.index') }}" class="px-5 py-2.5 min-h-[44px] inline-flex items-center rounded-full bg-primary text-on-primary font-label-md text-label-md hover:opacity-90 transition-all">
                            Ajukan Bukti Misi
                        </a>
                    </div>
                </div>
            @empty
                <div class="bg-surface-card rounded-[24px] p-8 text-center border border-border-subtle/50 space-y-3">
                    <span class="material-symbols-outlined text-[36px] text-text-muted" aria-hidden="true">inbox</span>
                    <h3 class="font-headline-sm text-headline-sm text-text-primary">Belum Ada Misi Aktif</h3>
                    <p class="font-body-sm text-body-sm text-text-muted">Saat ini belum ada misi baru yang dibuka untuk semester berjalan.</p>
                </div>
            @endforelse
        </div>

        <div class="lg:col-span-5 space-y-6">
            <div class="bg-surface-card rounded-[24px] p-6 shadow-xs border border-border-subtle/50 space-y-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Koleksi Badge</h3>
                        <p class="font-body-sm text-body-sm text-text-muted">Capaian terverifikasi dari basis data</p>
                    </div>
                    <a class="font-label-sm text-label-sm text-primary hover:underline" href="{{ route('portfolio.index') }}">
                        Lihat di Portofolio
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    @forelse($allBadges as $badge)
                        @php
                            $hasBadge = $earnedBadges->contains('id', $badge->id);
                        @endphp
                        <x-gamification.badge-card
                            :name="$badge->name"
                            :description="$badge->description"
                            :xp="$badge->min_xp"
                            :earned="$hasBadge"
                            :compact="true"
                            :showHaptic="false"
                        />
                    @empty
                        <div class="col-span-full p-4 text-center text-text-muted font-body-sm text-body-sm">
                            Belum ada data badge.
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="bg-surface-card rounded-[24px] p-6 shadow-xs border border-border-subtle/50 space-y-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Aktivitas Pengajuan Terkini</h3>
                        <p class="font-body-sm text-body-sm text-text-muted">Status validasi langsung Kelompok 5</p>
                    </div>
                    <span class="material-symbols-outlined text-badge-emerald text-[18px]" style="font-variation-settings: 'FILL' 1;" aria-hidden="true">verified</span>
                </div>
                <div class="space-y-4 pt-1">
                    @forelse($recentSubmissions as $sub)
                        <div class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full {{ $sub->status === 'Disetujui' ? 'bg-badge-emerald' : ($sub->status === 'Ditolak' ? 'bg-error' : 'bg-primary') }} mt-2 shrink-0"></div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-2">
                                    <p class="font-label-md text-label-md text-text-primary truncate">{{ $sub->mission->title ?? 'Misi Kampus' }}</p>
                                    <span class="font-label-sm text-label-sm {{ $sub->status === 'Disetujui' ? 'text-badge-emerald' : 'text-primary' }} font-bold shrink-0">
                                        +{{ $sub->mission->xp_reward ?? 0 }} XP
                                    </span>
                                </div>
                                <p class="font-body-sm text-body-sm text-text-muted">
                                    {{ $sub->user->name ?? 'Mahasiswa' }} • <span class="font-semibold">{{ $sub->status }}</span>
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="font-body-sm text-body-sm text-text-muted text-center py-4">Belum ada riwayat aktivitas pengajuan.</p>
                    @endforelse
                </div>
                <div class="pt-2">
                    <a class="inline-flex items-center justify-center gap-1.5 w-full py-2.5 min-h-[44px] rounded-full bg-pastel-lavender-start/60 text-primary font-label-md text-label-md hover:bg-pastel-lavender-start transition-colors" href="{{ route('portfolio.index') }}">
                        <span>Lihat Portofolio Prestasi</span>
                        <span class="material-symbols-outlined text-[15px]" aria-hidden="true">open_in_new</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-gamification.rank-journey :currentXp="$currentXp" :currentLevel="$currentLevel" />
</div>
@endsection
