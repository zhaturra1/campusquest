@extends('layouts.app')

@section('title', 'Portofolio Digital Prestasi | CampusQuest')

@section('content')
@php
    $studentName = $student->name ?? 'Fathurrahman Alfarizi';
    $studentNim = $student->nim ?? '103032400035';
    $studentFaculty = $student->faculty ?? 'Fakultas Informatika';
    $studentEmail = $student->email ?? 'fathur@student.telkomuniversity.ac.id';
    $studentXp = $student->xp ?? 1720;
    $studentLevel = $student->level ?? 7;
    $initials = collect(explode(' ', $studentName))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
    $earnedBadges = $student ? $student->badges : collect();
    $totalVerifiedXp = $verifiedSubmissions->sum(fn($s) => $s->mission->xp_reward ?? 0);
@endphp

<div class="flex flex-col w-full">
    <div role="status" aria-live="polite" class="fixed bottom-8 right-8 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 px-5 py-3.5 bg-text-primary text-surface-card rounded-full shadow-xl font-label-md text-label-md" id="toastNotification">
        <span class="material-symbols-outlined text-on-primary text-[20px]" aria-hidden="true">check_circle</span>
        <span id="toastMessage">Tautan portofolio disalin ke clipboard!</span>
    </div>

    <div class="w-full mb-8 flex flex-col xl:flex-row items-start xl:items-center justify-between gap-6">
        <div class="space-y-1.5 max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container rounded-full text-text-muted font-label-sm text-label-sm uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-badge-emerald"></span>
                E-Portfolio • PIC Epic 6: Fathurrahman Alfarizi
            </div>
            <h1 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">Portofolio Digital Prestasi</h1>
            <p class="font-body-md text-body-md text-text-muted">Rekam jejak aktivitas akademik dan kemahasiswaan yang telah divalidasi pada basis data CampusQuest Telkom University.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3 w-full xl:w-auto justify-start xl:justify-end">
            <form action="{{ route('portfolio.index') }}" method="GET" class="relative w-full sm:w-auto max-w-full">
                <label for="portfolioStudentSelect" class="sr-only">Pilih Mahasiswa Kelompok 5</label>
                <select id="portfolioStudentSelect" name="nim" onchange="this.form.submit()" class="w-full sm:w-auto max-w-full truncate appearance-none px-4 py-2.5 pr-10 min-h-[44px] bg-surface-card rounded-xl font-label-md text-label-md text-text-primary shadow-sm hover:bg-pastel-lavender-start transition-colors cursor-pointer">
                    @foreach($students as $stu)
                        <option value="{{ $stu->nim }}" {{ $stu->nim === $studentNim ? 'selected' : '' }}>
                            {{ $stu->name }} ({{ $stu->nim }})
                        </option>
                    @endforeach
                </select>
                <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[18px]" aria-hidden="true">expand_more</span>
            </form>

            <button type="button" class="inline-flex items-center gap-2 px-5 py-2.5 min-h-[44px] bg-surface-card hover:bg-pastel-lavender-start text-text-primary rounded-full font-label-lg text-label-lg shadow-sm hover:shadow transition-all group" id="btnShareLink">
                <span class="material-symbols-outlined text-[18px] text-primary group-hover:scale-110 transition-transform" aria-hidden="true">share</span>
                <span>Bagikan Tautan</span>
            </button>
            <button type="button" class="inline-flex items-center gap-2 px-6 py-2.5 min-h-[44px] bg-gradient-to-r from-primary-container to-secondary text-surface-card rounded-full font-label-lg text-label-lg shadow-[0_4px_16px_rgba(108,92,231,0.28)] hover:brightness-105 transition-all" id="btnExportPdf">
                <span class="material-symbols-outlined text-[19px]" aria-hidden="true">download</span>
                <span>Cetak / Export PDF</span>
            </button>
        </div>
    </div>

    <div class="relative w-full max-w-5xl mx-auto">
        <div class="w-full bg-surface-card rounded-[24px] p-6 sm:p-8 md:p-12 shadow-[0_12px_40px_-6px_rgba(108,92,231,0.08),0_4px_12px_-2px_rgba(0,0,0,0.02)] space-y-10">
            <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between gap-6 pb-8 bg-gradient-to-br from-pastel-lavender-start/50 via-transparent to-pastel-lavender-end/30 p-6 md:p-8 rounded-[20px]">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                    <div class="relative group shrink-0">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full bg-primary text-on-primary shadow-md ring-4 ring-surface-card flex items-center justify-center font-headline-xl font-bold" aria-hidden="true">
                            {{ $initials }}
                        </div>
                        <div class="absolute bottom-1 right-1 w-7 h-7 bg-badge-emerald text-surface-card rounded-full flex items-center justify-center shadow" title="Akun Terdaftar">
                            <span class="material-symbols-outlined text-[16px]" aria-hidden="true">check</span>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex flex-wrap items-center gap-2">
                            <h2 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">{{ $studentName }}</h2>
                            <span class="px-2.5 py-0.5 bg-surface-card text-primary font-label-sm text-label-sm rounded-full shadow-sm">NIM: {{ $studentNim }}</span>
                        </div>
                        <p class="font-body-lg text-body-lg text-text-muted">{{ $studentFaculty }} • Telkom University</p>
                        <div class="flex flex-wrap items-center gap-3 pt-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-card rounded-full font-label-md text-label-md text-text-primary shadow-sm">
                                <span class="material-symbols-outlined text-badge-gold text-[16px]" style="font-variation-settings: 'FILL' 1;" aria-hidden="true">school</span>
                                Anggota Kelompok 5
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-card rounded-full font-label-md text-label-md text-text-primary shadow-sm">
                                <span class="material-symbols-outlined text-primary text-[16px]" aria-hidden="true">military_tech</span>
                                Level {{ $studentLevel }} Scholar • <strong>{{ number_format($studentXp) }} XP</strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row md:flex-col items-start md:items-end gap-2 w-full md:w-auto pt-2 md:pt-0">
                    <a class="inline-flex items-center gap-2 px-3 py-1.5 bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-sm text-label-sm rounded-full shadow-sm transition-colors" href="mailto:{{ $studentEmail }}">
                        <span class="material-symbols-outlined text-[15px] text-badge-sky" aria-hidden="true">alternate_email</span>
                        <span>{{ $studentEmail }}</span>
                    </a>
                    <div class="text-right hidden md:block mt-1">
                        <span class="text-[11px] font-label-sm text-text-muted uppercase tracking-wider">Basis Data Aktif</span>
                        <p class="font-label-sm text-label-sm text-text-primary">Semester berjalan • Telkom University</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">psychology</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-text-primary">Ringkasan Kompetensi &amp; Peran Tim</h3>
                    </div>
                    <span class="font-label-sm text-label-sm text-badge-emerald bg-surface-container px-2.5 py-1 rounded-full">Terverifikasi Sistem</span>
                </div>
                <div class="p-6 bg-surface-body rounded-[18px] text-on-surface space-y-3">
                    <p class="font-body-md text-body-md leading-relaxed text-on-surface">
                        Mahasiswa aktif <strong>{{ $studentFaculty }}</strong> Telkom University yang berpartisipasi dalam pengembangan dan penyelesaian misi akademik, lomba inovasi, kepanitiaan, serta pengabdian masyarakat pada ekosistem <strong>CampusQuest Kelompok 5</strong>.
                    </p>
                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Pengembangan Aplikasi Web</span>
                        <span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Kolaborasi Tim Agile</span>
                        <span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Riset &amp; Karya Ilmiah</span>
                        <span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Kepemimpinan Organisasi</span>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">verified</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-text-primary">Riwayat Quest &amp; Rekam Jejak Disetujui</h3>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-label-sm text-label-sm text-text-muted">Total {{ $verifiedSubmissions->count() }} Bukti Disetujui</span>
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-primary"></span>
                        <span class="font-label-sm text-label-sm text-primary font-bold">+{{ number_format($totalVerifiedXp) }} XP Terverifikasi</span>
                    </div>
                </div>

                <div class="space-y-3.5">
                    @forelse($verifiedSubmissions as $sub)
                        <div class="group p-5 bg-surface-body hover:bg-pastel-lavender-start/40 rounded-[18px] transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-2xl bg-surface-card flex items-center justify-center text-primary shadow-sm flex-shrink-0">
                                    <span class="material-symbols-outlined text-[22px]" aria-hidden="true">task_alt</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="px-2.5 py-0.5 bg-surface-card text-badge-sky font-label-sm text-label-sm rounded-full shadow-sm">{{ $sub->mission->category ?? 'Akademik' }}</span>
                                        <span class="font-label-sm text-label-sm text-text-muted"> Mahasiswa: {{ $sub->user->name ?? $studentName }}</span>
                                        <span class="font-label-sm text-label-sm text-text-muted">• Berkas: {{ $sub->proof_file }}</span>
                                    </div>
                                    <h4 class="font-headline-sm text-headline-sm text-text-primary group-hover:text-primary transition-colors">
                                        {{ $sub->mission->title ?? 'Misi Kampus' }}
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-text-muted">{{ $sub->notes ?: $sub->mission->description }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
                                <span class="inline-flex items-center gap-1 px-3 py-1 bg-surface-card text-primary font-label-md text-label-md rounded-full shadow-sm">
                                    <span class="material-symbols-outlined text-[16px]" aria-hidden="true">bolt</span> +{{ $sub->mission->xp_reward ?? 0 }} XP
                                </span>
                                <span class="px-2.5 py-1 rounded-full bg-badge-emerald text-on-primary font-label-sm text-label-sm">
                                    {{ $sub->status }}
                                </span>
                            </div>
                        </div>
                    @empty
                        <div class="p-8 bg-surface-body rounded-[18px] text-center space-y-2">
                            <span class="material-symbols-outlined text-[32px] text-text-muted" aria-hidden="true">folder_open</span>
                            <p class="font-label-md text-label-md text-text-primary">Belum Ada Pengajuan yang Disetujui</p>
                            <p class="font-body-sm text-body-sm text-text-muted">Silakan ajukan bukti kegiatan melalui halaman Pengajuan Misi dan lakukan verifikasi pada Panel Verifikator.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">award_star</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-text-primary">Lencana &amp; Badge Capaian</h3>
                    </div>
                    <span class="font-label-sm text-label-sm text-primary font-semibold">Sinkron dengan Tabel Badges</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @forelse($earnedBadges as $badge)
                        <x-gamification.badge-card
                            :name="$badge->name"
                            :description="$badge->description"
                            :xp="$badge->min_xp"
                            :earned="true"
                            :compact="false"
                            :showHaptic="true"
                        />
                    @empty
                        <div class="col-span-full p-6 bg-surface-body rounded-[18px] text-center text-text-muted font-body-sm text-body-sm">
                            Mahasiswa ini sedang mengumpulkan XP untuk membuka lencana pertama.
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="pt-8 bg-surface-body p-6 md:p-8 rounded-[20px] flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex items-center gap-6">
                    <div class="w-20 h-20 bg-surface-card p-2 rounded-2xl shadow-sm flex flex-col items-center justify-center flex-shrink-0">
                        <svg class="w-full h-full text-text-primary" width="64" height="64" fill="currentColor" viewBox="0 0 100 100" aria-hidden="true">
                            <path d="M10 10h30v30h-30zM16 16v18h18v-18zM22 22h6v6h-6zM60 10h30v30h-30zM66 16v18h18v-18zM72 22h6v6h-6zM10 60h30v30h-30zM16 66v18h18v-18zM22 72h6v6h-6zM60 60h10v10h-10zM80 60h10v10h-10zM70 70h10v10h-10zM60 80h10v10h-10zM80 80h10v10h-10zM45 15h10v10h-10zM45 35h10v10h-10zM45 60h10v10h-10zM15 45h10v10h-10zM35 45h10v10h-10z"></path>
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <span class="inline-flex items-center gap-1.5 font-label-sm text-label-sm text-badge-emerald font-bold uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[16px]" aria-hidden="true">verified</span>
                            Rekam Jejak Terverifikasi Basis Data
                        </span>
                        <p class="font-label-md text-label-md text-text-primary">Direktorat Kemahasiswaan • Telkom University</p>
                        <p class="font-body-sm text-body-sm text-text-muted">NIM Mahasiswa: {{ $studentNim }}</p>
                        <p class="font-body-sm text-body-sm text-text-muted">Status: Aktif Semester Berjalan</p>
                    </div>
                </div>
                <div class="text-left md:text-right space-y-1">
                    <p class="font-label-md text-label-md text-text-primary font-bold">Admin Kemahasiswaan Tel-U</p>
                    <p class="font-body-sm text-body-sm text-text-muted">Verifikator Sistem CampusQuest Kelompok 5</p>
                    <span class="inline-block px-2.5 py-0.5 bg-surface-card text-on-surface-variant font-label-sm text-label-sm rounded-full shadow-sm">
                        Kode Verifikator: NIP-99001
                    </span>
                </div>
            </div>

            <div class="pt-4 flex flex-col sm:flex-row items-center justify-between text-text-muted font-body-sm text-body-sm gap-2">
                <span>Dokumen ini merupakan ringkasan portofolio elektronik yang dihasilkan oleh aplikasi CampusQuest Kelompok 5.</span>
                <span class="font-label-md text-label-md text-primary font-medium">NIM: {{ $studentNim }}</span>
            </div>
        </div>
    </div>

    <div class="no-print space-y-8 mt-8">
        <x-gamification.rank-journey :currentXp="$studentXp" :currentLevel="$studentLevel" />
        <x-gamification.badge-gallery :limit="12" />
    </div>

    <script>
        (function() {
            const toast = document.getElementById('toastNotification');
            const toastMsg = document.getElementById('toastMessage');
            const btnShare = document.getElementById('btnShareLink');
            const btnExport = document.getElementById('btnExportPdf');

            function showToast(message) {
                if (!toast || !toastMsg) return;
                toastMsg.textContent = message;
                toast.classList.remove('translate-y-24', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
                setTimeout(() => {
                    toast.classList.remove('translate-y-0', 'opacity-100');
                    toast.classList.add('translate-y-24', 'opacity-0');
                }, 3200);
            }

            if (btnShare) {
                btnShare.addEventListener('click', function() {
                    if (navigator.clipboard) {
                        navigator.clipboard.writeText(window.location.href);
                    }
                    showToast('Tautan portofolio {{ addslashes($studentName) }} telah disalin!');
                });
            }

            if (btnExport) {
                btnExport.addEventListener('click', function() {
                    showToast('Membuka dialog cetak PDF...');
                    setTimeout(() => {
                        window.print();
                    }, 500);
                });
            }
        })();
    </script>
</div>
@endsection
