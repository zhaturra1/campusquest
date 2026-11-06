@extends('layouts.app')

@section('title', 'Leaderboard Kampus | CampusQuest')

@section('content')
@php
    $rank1 = $players->get(0);
    $rank2 = $players->get(1);
    $rank3 = $players->get(2);
    $maxFacultyXp = $faculties->max('total_xp') ?: 1;
@endphp

<div class="flex flex-col w-full gap-8">
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
        <div class="space-y-1">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md">
                <span class="material-symbols-outlined text-[16px]" aria-hidden="true">military_tech</span>
                <span>Klasemen Resmi Mahasiswa Kelompok 5 • Telkom University</span>
            </div>
            <h1 class="font-headline-xl-mobile sm:text-headline-xl text-text-primary tracking-tight">Papan Peringkat Kampus (Leaderboard)</h1>
            <p class="font-body-lg text-body-lg text-text-muted">Kompetisi sehat mahasiswa dalam mengumpulkan XP keaktifan, riset, dan pencapaian akademik terverifikasi.</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <div class="flex items-center gap-2 bg-surface-card px-4 py-2 rounded-full shadow-sm text-text-muted font-body-sm text-body-sm">
                <span class="material-symbols-outlined text-[18px] text-badge-emerald" aria-hidden="true">sync</span>
                <span>Sinkron dengan Database SQLite</span>
            </div>
            <button type="button" onclick="shareLeaderboard()" class="px-5 py-2.5 min-h-[44px] rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:opacity-95 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]" aria-hidden="true">share</span>
                <span id="shareLeaderboardText">Bagikan Peringkat</span>
            </button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-card p-2.5 rounded-[22px] shadow-sm">
        <div class="flex flex-wrap items-center gap-1.5 p-1 bg-surface-sidebar rounded-full" id="scope-tabs" role="tablist" aria-label="Filter Cakupan Fakultas">
            <button type="button" class="scope-btn active px-5 py-2 min-h-[40px] rounded-full font-label-lg text-label-lg transition-all bg-primary-container text-on-primary-container shadow-sm" data-faculty="all">
                Semua Fakultas ({{ $players->count() }})
            </button>
            @foreach($faculties->take(3) as $fac)
                <button type="button" class="scope-btn px-4 py-2 min-h-[40px] rounded-full font-label-lg text-label-lg text-on-surface-variant hover:text-primary hover:bg-pastel-lavender-start transition-all" data-faculty="{{ $fac['name'] }}">
                    {{ $fac['name'] }} ({{ $fac['student_count'] }})
                </button>
            @endforeach
        </div>
    </div>

    @if($players->count() >= 3)
        @php
            $init1 = collect(explode(' ', $rank1->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
            $init2 = collect(explode(' ', $rank2->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
            $init3 = collect(explode(' ', $rank3->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end pt-8">
            <div class="order-2 md:order-1 bg-surface-card rounded-[24px] p-6 shadow-sm hover:-translate-y-1 transition-all flex flex-col items-center text-center relative">
                <div class="absolute -top-6 w-12 h-12 rounded-full bg-surface-sidebar shadow-md flex items-center justify-center text-on-surface-variant font-headline-sm text-headline-sm">
                    2
                </div>
                <div class="relative mt-2 mb-3">
                    <div class="w-20 h-20 rounded-full bg-pastel-lavender-start text-primary ring-4 ring-surface-sidebar shadow-md flex items-center justify-center font-headline-lg font-bold" aria-hidden="true">
                        {{ $init2 }}
                    </div>
                    <span class="absolute -bottom-1 right-0 px-2.5 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm">Top 2</span>
                </div>
                <div class="flex items-center gap-1.5 text-badge-violet">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">verified</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">Level {{ $rank2->level }} Scholar</span>
                </div>
                <h2 class="font-headline-sm text-headline-sm text-text-primary mt-1">{{ $rank2->name }}</h2>
                <p class="font-body-sm text-body-sm text-text-muted">NIM {{ $rank2->nim }} • {{ $rank2->faculty }}</p>
                <div class="w-full my-4 py-3 rounded-2xl bg-surface-container-low flex items-center justify-around">
                    <div>
                        <span class="block font-headline-md text-headline-md text-primary font-bold">{{ number_format($rank2->xp) }}</span>
                        <span class="font-label-sm text-label-sm text-text-muted">Total XP</span>
                    </div>
                    <div class="w-px h-8 bg-outline-variant"></div>
                    <div>
                        <span class="block font-headline-md text-headline-md text-badge-emerald font-bold">{{ $rank2->approved_count }}</span>
                        <span class="font-label-sm text-label-sm text-text-muted">Misi Disetujui</span>
                    </div>
                </div>
            </div>

            <div class="order-1 md:order-2 bg-surface-card rounded-[28px] p-8 shadow-xl hover:-translate-y-1 transition-all flex flex-col items-center text-center relative -mt-4 bg-gradient-to-b from-pastel-lavender-start/40 via-surface-card to-surface-card">
                <div class="absolute -top-7 flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-badge-gold text-on-primary shadow-lg flex items-center justify-center font-headline-lg text-headline-lg">
                        1
                    </div>
                </div>
                <div class="relative mt-8 mb-4">
                    <div class="w-24 h-24 rounded-full bg-primary text-on-primary ring-4 ring-badge-gold/40 shadow-lg flex items-center justify-center font-headline-xl font-bold" aria-hidden="true">
                        {{ $init1 }}
                    </div>
                    <div class="absolute -bottom-2 inset-x-0 mx-auto w-max px-3 py-0.5 rounded-full bg-badge-gold text-on-primary font-label-sm text-label-sm shadow-sm flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]" aria-hidden="true">workspace_premium</span>
                        <span>Peringkat #1</span>
                    </div>
                </div>
                <div class="flex items-center gap-1.5 text-badge-violet mt-1">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">workspace_premium</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider font-bold">Level {{ $rank1->level }} Master Scholar</span>
                </div>
                <h2 class="font-headline-md text-headline-md text-text-primary mt-1">{{ $rank1->name }}</h2>
                <p class="font-body-sm text-body-sm text-text-muted">NIM {{ $rank1->nim }} • {{ $rank1->faculty }}</p>
                <div class="w-full my-4 py-3.5 rounded-2xl bg-pastel-lavender-start flex items-center justify-around">
                    <div>
                        <span class="block font-headline-lg text-headline-lg text-primary font-bold">{{ number_format($rank1->xp) }}</span>
                        <span class="font-label-sm text-label-sm text-text-muted">Total XP</span>
                    </div>
                    <div class="w-px h-8 bg-outline-variant"></div>
                    <div>
                        <span class="block font-headline-md text-headline-md text-secondary font-bold">{{ $rank1->approved_count }}</span>
                        <span class="font-label-sm text-label-sm text-text-muted">Misi Disetujui</span>
                    </div>
                </div>
            </div>

            <div class="order-3 bg-surface-card rounded-[24px] p-6 shadow-sm hover:-translate-y-1 transition-all flex flex-col items-center text-center relative">
                <div class="absolute -top-6 w-12 h-12 rounded-full bg-surface-container shadow-md flex items-center justify-center text-on-surface-variant font-headline-sm text-headline-sm">
                    3
                </div>
                <div class="relative mt-2 mb-3">
                    <div class="w-20 h-20 rounded-full bg-secondary-fixed text-on-secondary-container ring-4 ring-surface-container shadow-md flex items-center justify-center font-headline-lg font-bold" aria-hidden="true">
                        {{ $init3 }}
                    </div>
                    <span class="absolute -bottom-1 right-0 px-2.5 py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm">Top 3</span>
                </div>
                <div class="flex items-center gap-1.5 text-badge-violet">
                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">verified</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">Level {{ $rank3->level }} Scholar</span>
                </div>
                <h2 class="font-headline-sm text-headline-sm text-text-primary mt-1">{{ $rank3->name }}</h2>
                <p class="font-body-sm text-body-sm text-text-muted">NIM {{ $rank3->nim }} • {{ $rank3->faculty }}</p>
                <div class="w-full my-4 py-3 rounded-2xl bg-surface-container-low flex items-center justify-around">
                    <div>
                        <span class="block font-headline-md text-headline-md text-primary font-bold">{{ number_format($rank3->xp) }}</span>
                        <span class="font-label-sm text-label-sm text-text-muted">Total XP</span>
                    </div>
                    <div class="w-px h-8 bg-outline-variant"></div>
                    <div>
                        <span class="block font-headline-md text-headline-md text-badge-emerald font-bold">{{ $rank3->approved_count }}</span>
                        <span class="font-label-sm text-label-sm text-text-muted">Misi Disetujui</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <div class="lg:col-span-8 flex flex-col gap-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 px-2">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[22px]" aria-hidden="true">format_list_numbered</span>
                    <h2 class="font-headline-md text-headline-md text-text-primary">Daftar Klasemen Lengkap Kelompok 5</h2>
                </div>
                <div class="relative w-full sm:w-64">
                    <label for="studentSearch" class="sr-only">Cari nama atau NIM</label>
                    <span class="material-symbols-outlined absolute left-3 top-2.5 text-text-muted text-[18px]" aria-hidden="true">search</span>
                    <input class="w-full pl-9 pr-4 py-2 bg-surface-card rounded-xl font-body-sm text-body-sm text-text-primary shadow-sm focus:ring-2 focus:ring-primary/20 transition-all" id="studentSearch" placeholder="Cari nama atau NIM..." type="search"/>
                </div>
            </div>

            <div class="bg-surface-card rounded-[24px] shadow-sm overflow-hidden p-3">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-text-muted font-label-md text-label-md uppercase tracking-wider">
                                <th class="py-3 px-4 w-16 text-center">Rank</th>
                                <th class="py-3 px-4">Mahasiswa</th>
                                <th class="py-3 px-4">Fakultas</th>
                                <th class="py-3 px-4">Tingkat Level</th>
                                <th class="py-3 px-4 text-right">Total XP</th>
                                <th class="py-3 px-4 text-center">Portofolio</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container-low font-body-md text-body-md" id="leaderboard-table-body">
                            @forelse($players as $index => $player)
                                @php
                                    $initials = collect(explode(' ', $player->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
                                @endphp
                                <tr class="leaderboard-row hover:bg-pastel-lavender-start/50 transition-colors" data-faculty="{{ $player->faculty }}">
                                    <td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-primary font-bold">#{{ $index + 1 }}</td>
                                    <td class="py-3.5 px-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-full bg-pastel-lavender-start flex items-center justify-center font-label-md text-label-md text-primary font-bold shrink-0" aria-hidden="true">
                                                {{ $initials }}
                                            </div>
                                            <div>
                                                <p class="font-label-lg text-label-lg text-text-primary leading-tight">{{ $player->name }}</p>
                                                <p class="font-body-sm text-body-sm text-text-muted leading-tight">NIM: {{ $player->nim }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-4">
                                        <span class="block font-label-md text-label-md text-text-primary leading-tight">{{ $player->faculty }}</span>
                                        <span class="block font-body-sm text-body-sm text-text-muted leading-tight">Telkom University</span>
                                    </td>
                                    <td class="py-3.5 px-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
                                            <span class="material-symbols-outlined text-[14px]" aria-hidden="true">school</span>
                                            <span>Level {{ $player->level }}</span>
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-primary font-bold">{{ number_format($player->xp) }} XP</td>
                                    <td class="py-3.5 px-4 text-center">
                                        <a href="{{ route('portfolio.index', ['nim' => $player->nim]) }}" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-full bg-surface-container-low hover:bg-pastel-lavender-start text-primary font-label-sm text-label-sm transition-colors">
                                            <span>Lihat</span>
                                            <span class="material-symbols-outlined text-[14px]" aria-hidden="true">open_in_new</span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-8 text-center text-text-muted">Belum ada data mahasiswa pada papan peringkat.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 flex flex-col gap-6">
            <div class="bg-surface-card rounded-[24px] p-6 shadow-sm space-y-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]" aria-hidden="true">bar_chart</span>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Klasemen Fakultas</h3>
                    </div>
                    <span class="font-label-sm text-label-sm text-text-muted uppercase">Akumulasi XP</span>
                </div>
                <p class="font-body-sm text-body-sm text-text-muted">
                    Perbandingan akumulasi XP anggota Kelompok 5 berdasarkan fakultas di Telkom University.
                </p>
                <div class="space-y-4 pt-1">
                    @forelse($faculties as $idx => $fac)
                        @php
                            $barWidth = min(100, (int) round(($fac['total_xp'] / $maxFacultyXp) * 100));
                        @endphp
                        <div class="space-y-1.5">
                            <div class="flex justify-between items-center">
                                <span class="font-label-md text-label-md text-text-primary">{{ $idx + 1 }}. {{ $fac['name'] }}</span>
                                <span class="font-label-md text-label-md text-primary font-bold">{{ number_format($fac['total_xp']) }} XP</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-surface-container overflow-hidden" aria-hidden="true">
                                <div class="h-full rounded-full bg-gradient-to-r from-primary to-badge-violet" style="width: {{ $barWidth }}%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-text-muted">
                                <span>{{ $fac['student_count'] }} Mahasiswa Terdaftar</span>
                                <span class="text-badge-emerald font-semibold">Aktif</span>
                            </div>
                        </div>
                    @empty
                        <p class="font-body-sm text-body-sm text-text-muted">Belum ada data fakultas.</p>
                    @endforelse
                </div>
            </div>

            <div class="bg-surface-card rounded-[24px] p-6 shadow-sm space-y-4">
                <h3 class="font-headline-sm text-headline-sm text-text-primary flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary text-[20px]" aria-hidden="true">insights</span>
                    <span>Panduan Distribusi XP</span>
                </h3>
                <div class="space-y-3 font-body-sm text-body-sm text-text-muted">
                    <div class="flex items-start gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-badge-emerald mt-1.5 shrink-0"></span>
                        <p><strong class="text-text-primary">Publikasi Riset &amp; Jurnal:</strong> Menghasilkan 500 XP per karya ilmiah yang disetujui.</p>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-badge-violet mt-1.5 shrink-0"></span>
                        <p><strong class="text-text-primary">Lomba &amp; Hackathon:</strong> Kompetisi inovasi kampus memperoleh 400 XP.</p>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-badge-sky mt-1.5 shrink-0"></span>
                        <p><strong class="text-text-primary">Kepanitiaan &amp; Sosial:</strong> Kegiatan PKKMB dan bakti sosial memperoleh 150 hingga 300 XP.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function shareLeaderboard() {
            if (navigator.clipboard) {
                navigator.clipboard.writeText(window.location.href);
            }
            const btnText = document.getElementById('shareLeaderboardText');
            if (btnText) {
                btnText.textContent = 'Tautan Disalin!';
                setTimeout(() => { btnText.textContent = 'Bagikan Peringkat'; }, 2500);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const scopeButtons = document.querySelectorAll('.scope-btn');
            const rows = document.querySelectorAll('.leaderboard-row');

            scopeButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const selectedFaculty = btn.getAttribute('data-faculty');
                    scopeButtons.forEach(b => {
                        b.classList.remove('bg-primary-container', 'text-on-primary-container', 'shadow-sm', 'active');
                        b.classList.add('text-on-surface-variant');
                    });
                    btn.classList.add('bg-primary-container', 'text-on-primary-container', 'shadow-sm', 'active');
                    btn.classList.remove('text-on-surface-variant');

                    rows.forEach(row => {
                        const rowFac = row.getAttribute('data-faculty');
                        row.style.display = (selectedFaculty === 'all' || rowFac === selectedFaculty) ? '' : 'none';
                    });
                });
            });

            const searchInput = document.getElementById('studentSearch');
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    const val = e.target.value.toLowerCase();
                    rows.forEach(row => {
                        const text = row.innerText.toLowerCase();
                        row.style.display = text.includes(val) ? '' : 'none';
                    });
                });
            }
        });
    </script>
</div>
@endsection
