@extends('layouts.app')

@section('title', 'Katalog Quest & Eksplorasi Kampus | CampusQuest')

@section('content')
@php
    $featuredMission = $missions->first();
    $categories = $missions->pluck('category')->unique()->values();
@endphp

<div class="flex flex-col w-full">
    <div class="flex flex-col gap-8 pb-16">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="flex flex-col gap-2 max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary w-fit">
                    <span class="material-symbols-outlined text-[16px]" aria-hidden="true">verified_user</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">PIC Epic 4: Naira Cahaya P. D. Sinaga</span>
                </div>
                <h1 class="font-headline-xl-mobile sm:text-headline-xl text-text-primary tracking-tight">Katalog Misi &amp; Eksplorasi Kampus</h1>
                <p class="font-body-lg text-body-lg text-text-muted">Temukan kegiatan akademik, kepanitiaan, sosial, dan kompetisi di Telkom University untuk meningkatkan XP serta portofolio resmimu.</p>
            </div>
            <div class="flex flex-wrap items-center gap-3 bg-surface-card p-3 rounded-[20px] shadow-sm">
                <div class="flex items-center gap-3 px-3 py-1.5 bg-pastel-lavender-start rounded-full">
                    <span class="material-symbols-outlined text-primary text-[20px]" aria-hidden="true">workspace_premium</span>
                    <div>
                        <p class="font-label-sm text-label-sm text-text-muted">TOTAL XP TERSEDIA</p>
                        <p class="font-label-lg text-label-lg text-primary font-bold">{{ number_format($totalXpAvailable ?? 1600) }} XP</p>
                    </div>
                </div>
                <div class="h-8 w-px bg-surface-container hidden sm:block"></div>
                <div class="flex items-center gap-3 px-3 py-1.5">
                    <span class="material-symbols-outlined text-badge-emerald text-[20px]" aria-hidden="true">task_alt</span>
                    <div>
                        <p class="font-label-sm text-label-sm text-text-muted">PENGAJUAN DISETUJUI</p>
                        <p class="font-label-lg text-label-lg text-text-primary font-bold">{{ $completedMissionsCount ?? 2 }} Misi</p>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div role="alert" class="p-4 rounded-2xl bg-badge-emerald/15 border border-badge-emerald/30 text-badge-emerald font-label-md text-label-md flex items-center gap-3">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">check_circle</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if($featuredMission)
        <div class="relative overflow-hidden rounded-[24px] bg-gradient-to-br from-pastel-lavender-start via-pastel-lavender-end to-surface-card p-6 sm:p-8 shadow-sm border border-border-subtle/50">
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
                <div class="lg:col-span-7 flex flex-col justify-between gap-5">
                    <div class="flex flex-col gap-3.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-card text-badge-violet shadow-xs font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[15px]" aria-hidden="true">military_tech</span>
                                Featured Epic Quest
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#FEF9E7] text-badge-gold font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[15px]" aria-hidden="true">category</span>
                                Kategori: {{ $featuredMission->category }}
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[15px]" aria-hidden="true">schedule</span>
                                Batas: {{ \Carbon\Carbon::parse($featuredMission->deadline)->format('d M Y') }}
                            </span>
                        </div>
                        <div>
                            <h2 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">{{ $featuredMission->title }}</h2>
                            <p class="font-body-md text-body-md text-text-muted mt-1.5 leading-relaxed">{{ $featuredMission->description }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-surface-card/90 shadow-xs border border-border-subtle/40">
                            <div class="px-3 py-2 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center font-bold font-headline-sm shrink-0">
                                +{{ $featuredMission->xp_reward }}
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-sm text-label-sm text-text-muted">REWARD XP</span>
                                <span class="font-label-md text-label-md text-primary font-bold truncate">Poin Prestasi Utama</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-surface-card/90 shadow-xs border border-border-subtle/40">
                            <div class="w-10 h-10 rounded-xl bg-pastel-lavender-start text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">location_on</span>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-sm text-label-sm text-text-muted">LOKASI KAMPUS</span>
                                <span class="font-label-md text-label-md text-text-primary font-semibold truncate">{{ $featuredMission->location }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap sm:flex-nowrap items-center gap-3 pt-1">
                        <button type="button" class="w-full sm:w-auto justify-center px-6 py-3 min-h-[44px] rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-lg text-label-lg shadow-md hover:opacity-95 transition-all flex items-center gap-2" onclick="openModal({{ $featuredMission->id }}, '{{ addslashes($featuredMission->title) }}', '{{ addslashes($featuredMission->category) }}')">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">rocket_launch</span>
                            <span>Ajukan Bukti Misi Ini</span>
                        </button>
                        <a href="{{ route('submissions.index') }}" class="w-full sm:w-auto justify-center px-5 py-3 min-h-[44px] rounded-full bg-surface-card hover:bg-surface text-text-primary font-label-lg text-label-lg shadow-sm border border-border-subtle/50 transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px]" aria-hidden="true">upload_file</span>
                            <span>Form Pengajuan Lengkap</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 flex">
                    <div class="w-full bg-surface-card rounded-[20px] p-6 shadow-sm border border-border-subtle/40 flex flex-col justify-between gap-4">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <span class="font-label-lg text-label-lg text-text-primary font-semibold">Alur Penyelesaian Quest</span>
                                <span class="px-2.5 py-0.5 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm font-bold">3 Tahap</span>
                            </div>
                            <div class="w-full bg-surface-container rounded-full h-2.5 overflow-hidden" aria-hidden="true">
                                <div class="bg-gradient-to-r from-primary-container to-secondary h-2.5 rounded-full w-[66%] transition-all"></div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-surface-container-low/50 text-text-muted font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-badge-emerald text-[18px] shrink-0" aria-hidden="true">check_circle</span>
                                <span>1. Pilih misi kegiatan kampus yang diikuti</span>
                            </div>
                            <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-pastel-lavender-start/60 text-text-primary font-label-md text-label-md">
                                <span class="material-symbols-outlined text-primary text-[18px] shrink-0" aria-hidden="true">radio_button_checked</span>
                                <span>2. Unggah bukti sertifikat / SK kepanitiaan</span>
                            </div>
                            <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-surface-container-low/50 text-text-muted font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-[18px] shrink-0" aria-hidden="true">radio_button_unchecked</span>
                                <span>3. Verifikasi Admin &amp; pencairan XP otomatis</span>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-surface-container flex items-center justify-between text-text-muted font-body-sm text-body-sm">
                            <span class="inline-flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-primary text-[16px]" aria-hidden="true">verified</span>
                                Format: PDF / JPG (Maks. 5MB)
                            </span>
                            <span class="text-badge-emerald font-semibold">Otomatis Masuk Portofolio</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="bg-surface-card rounded-[24px] p-6 shadow-sm flex flex-col gap-5">
            <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
                <div class="relative w-full lg:max-w-xl">
                    <label for="searchInput" class="sr-only">Cari nama quest, lokasi, atau kategori</label>
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-muted text-[22px]" aria-hidden="true">search</span>
                    <input class="w-full pl-12 pr-4 py-3 bg-pastel-lavender-start/40 text-text-primary placeholder:text-text-muted rounded-xl font-body-md text-body-md focus:bg-surface-card focus:ring-2 focus:ring-primary-container transition-all" id="searchInput" value="{{ request('q') }}" oninput="filterMissions()" placeholder="Cari nama quest, lokasi gedung, atau kategori..." type="search"/>
                </div>
                <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto justify-start lg:justify-end">
                    <div class="relative">
                        <select id="xpFilterSelect" onchange="filterMissions()" aria-label="Filter Rentang XP" class="appearance-none bg-surface-container-low hover:bg-surface-container px-4 py-2.5 pr-10 min-h-[44px] rounded-xl font-label-md text-label-md text-text-primary cursor-pointer transition-all">
                            <option value="all">Rentang XP: Semua</option>
                            <option value="low">100 - 250 XP</option>
                            <option value="mid">251 - 400 XP</option>
                            <option value="high">&gt; 400 XP</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-text-muted text-[18px]" aria-hidden="true">expand_more</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-2 overflow-x-auto pb-1 pt-1" role="tablist" aria-label="Filter Kategori Quest">
                <button type="button" onclick="selectCategoryPill('all', this)" class="mission-cat-pill px-5 py-2.5 min-h-[44px] rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
                    Semua Misi ({{ $missions->count() }})
                </button>
                @foreach($categories as $cat)
                    <button type="button" onclick="selectCategoryPill('{{ $cat }}', this)" class="mission-cat-pill px-5 py-2.5 min-h-[44px] rounded-full bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
                        {{ $cat }} ({{ $missions->where('category', $cat)->count() }})
                    </button>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="missionsGrid">
            @forelse($missions as $mission)
                <div class="mission-card bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group" data-category="{{ $mission->category }}" data-xp="{{ $mission->xp_reward }}">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-start justify-between gap-3">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[14px]" aria-hidden="true">explore</span>
                                {{ $mission->category }}
                            </span>
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
                                <span class="material-symbols-outlined text-[16px]" aria-hidden="true">bolt</span>
                                +{{ $mission->xp_reward }} XP
                            </span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">{{ $mission->location }}</span>
                            </div>
                            <h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">{{ $mission->title }}</h3>
                            <p class="font-body-md text-body-md text-text-muted">{{ $mission->description }}</p>
                        </div>
                    </div>
                    <div class="pt-6 mt-6 flex flex-col gap-4">
                        <div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px]" aria-hidden="true">calendar_today</span>
                                <span>Batas: {{ \Carbon\Carbon::parse($mission->deadline)->format('d M Y') }}</span>
                            </div>
                            <span class="text-badge-emerald font-semibold">Tersedia</span>
                        </div>
                        <button type="button" class="w-full py-3 min-h-[44px] rounded-full bg-pastel-lavender-start hover:bg-primary-container text-primary hover:text-on-primary font-label-md text-label-md transition-all flex items-center justify-center gap-2" onclick="openModal({{ $mission->id }}, '{{ addslashes($mission->title) }}', '{{ addslashes($mission->category) }}')">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">upload_file</span>
                            Ajukan Bukti Partisipasi
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-surface-card rounded-[24px] p-10 text-center space-y-3">
                    <span class="material-symbols-outlined text-[40px] text-text-muted" aria-hidden="true">search_off</span>
                    <h3 class="font-headline-sm text-headline-sm text-text-primary">Belum Ada Misi di Katalog</h3>
                    <p class="font-body-sm text-body-sm text-text-muted">Silakan tambahkan misi baru melalui Panel Verifikator.</p>
                </div>
            @endforelse
        </div>

        <div id="emptySearchState" class="hidden bg-surface-card rounded-[24px] p-10 text-center space-y-3">
            <span class="material-symbols-outlined text-[40px] text-text-muted" aria-hidden="true">search_off</span>
            <h3 class="font-headline-sm text-headline-sm text-text-primary">Misi Tidak Ditemukan</h3>
            <p class="font-body-sm text-body-sm text-text-muted">Tidak ada misi yang cocok dengan kata kunci atau filter yang dipilih.</p>
        </div>

        <div role="status" aria-live="polite" class="fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300 pointer-events-none" id="toastSuccess">
            <div class="bg-surface-card rounded-[18px] p-4 shadow-xl flex items-center gap-3 border border-border-subtle">
                <div class="w-10 h-10 rounded-full bg-badge-emerald/20 text-badge-emerald flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">check</span>
                </div>
                <div class="flex flex-col">
                    <p class="font-label-md text-label-md text-text-primary font-bold" id="toastTitle">Misi Berhasil Dipilih!</p>
                    <p class="font-body-sm text-body-sm text-text-muted" id="toastDesc">Silakan lengkapi berkas pengajuan bukti kegiatan.</p>
                </div>
            </div>
        </div>
    </div>

    <div role="dialog" aria-modal="true" aria-labelledby="modalDialogTitle" class="fixed inset-0 z-50 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300 flex items-center justify-center p-4" id="evidenceModal">
        <div class="bg-surface-card rounded-[28px] max-w-xl w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col gap-6 max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[24px]" aria-hidden="true">verified</span>
                    </div>
                    <div>
                        <h3 id="modalDialogTitle" class="font-headline-md text-headline-md text-text-primary">Ajukan Bukti Partisipasi</h3>
                        <p class="font-body-sm text-body-sm text-text-muted" id="modalCategoryTag">Kategori: Akademik • Epic 1 Nayla</p>
                    </div>
                </div>
                <button type="button" aria-label="Tutup Modal" class="w-11 h-11 rounded-full hover:bg-surface-sidebar flex items-center justify-center text-text-muted transition-colors" onclick="closeModal()">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">close</span>
                </button>
            </div>
            <div class="p-4 rounded-[16px] bg-pastel-lavender-start/50 flex items-start gap-3">
                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5" aria-hidden="true">info</span>
                <div class="font-body-sm text-body-sm text-text-muted leading-relaxed">
                    <strong class="text-text-primary font-semibold">Validasi Kemahasiswaan:</strong> Setiap pengajuan yang kamu kirim akan langsung masuk ke antrean Panel Verifikator di database untuk dievaluasi.
                </div>
            </div>
            <form action="{{ route('submissions.store') }}" method="POST" class="flex flex-col gap-5" id="evidenceForm">
                @csrf
                <input type="hidden" name="mission_id" id="modalMissionId" value="{{ $featuredMission->id ?? 1 }}"/>
                <div>
                    <label for="modalQuestName" class="block font-label-md text-label-md text-text-primary mb-2">Nama Kegiatan / Quest Terpilih</label>
                    <input class="w-full px-4 py-3 bg-surface-sidebar text-text-primary rounded-xl font-body-md text-body-md cursor-not-allowed" id="modalQuestName" readonly type="text"/>
                </div>
                <div>
                    <label for="modalProofFileName" class="block font-label-md text-label-md text-text-primary mb-2">Nama Berkas Sertifikat / Surat Tugas (PDF/JPG)</label>
                    <input class="w-full px-4 py-3 bg-surface-container-low focus:bg-surface-card rounded-xl font-body-md text-body-md focus:ring-2 focus:ring-primary-container transition-all" id="modalProofFileName" name="proof_file_name" value="Sertifikat_Partisipasi_TelU.pdf" required type="text"/>
                </div>
                <div>
                    <label for="modalNotes" class="block font-label-md text-label-md text-text-primary mb-2">Keterangan Tambahan / Refleksi Peran</label>
                    <textarea class="w-full p-4 bg-surface-container-low focus:bg-surface-card rounded-xl font-body-md text-body-md focus:ring-2 focus:ring-primary-container transition-all" id="modalNotes" name="notes" placeholder="Tuliskan peran spesifikmu, capaian kontribusi, atau nomor surat tugas..." rows="3" required></textarea>
                </div>
                <div class="flex items-center justify-end gap-3 pt-3">
                    <button class="px-6 py-2.5 min-h-[44px] rounded-full hover:bg-surface-sidebar text-text-muted font-label-md text-label-md transition-colors" onclick="closeModal()" type="button">
                        Batalkan
                    </button>
                    <button class="px-6 py-2.5 min-h-[44px] rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-md text-label-md shadow-md hover:opacity-95 transition-all flex items-center gap-2" type="submit">
                        <span class="material-symbols-outlined text-[18px]" aria-hidden="true">send</span>
                        Kirim untuk Verifikasi
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let activeCategory = 'all';

        function openModal(missionId, questTitle, category) {
            const modal = document.getElementById('evidenceModal');
            const idInput = document.getElementById('modalMissionId');
            const input = document.getElementById('modalQuestName');
            const tag = document.getElementById('modalCategoryTag');

            if (idInput) idInput.value = missionId;
            if (input) input.value = questTitle;
            if (tag) tag.innerHTML = 'Kategori: ' + category + ' &bull; Validasi Portofolio Nayla';

            modal.classList.remove('opacity-0', 'pointer-events-none');
            const dialog = modal.querySelector('div');
            dialog.classList.remove('scale-95');
            dialog.classList.add('scale-100');
        }

        function closeModal() {
            const modal = document.getElementById('evidenceModal');
            if (!modal) return;
            const dialog = modal.querySelector('div');
            dialog.classList.remove('scale-100');
            dialog.classList.add('scale-95');
            modal.classList.add('opacity-0', 'pointer-events-none');
        }

        function selectCategoryPill(cat, btnElement) {
            activeCategory = cat;
            document.querySelectorAll('.mission-cat-pill').forEach(btn => {
                btn.className = 'mission-cat-pill px-5 py-2.5 min-h-[44px] rounded-full bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-md text-label-md shadow-sm flex-shrink-0 transition-all';
            });
            btnElement.className = 'mission-cat-pill px-5 py-2.5 min-h-[44px] rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md shadow-sm flex-shrink-0 transition-all';
            filterMissions();
        }

        function filterMissions() {
            const query = (document.getElementById('searchInput')?.value || '').toLowerCase().trim();
            const xpRange = document.getElementById('xpFilterSelect')?.value || 'all';
            const cards = document.querySelectorAll('.mission-card');
            let visibleCount = 0;

            cards.forEach(card => {
                const text = card.innerText.toLowerCase();
                const cat = card.getAttribute('data-category');
                const xp = parseInt(card.getAttribute('data-xp') || '0', 10);

                const matchesQuery = !query || text.includes(query);
                const matchesCat = activeCategory === 'all' || cat === activeCategory;
                let matchesXp = true;
                if (xpRange === 'low') matchesXp = xp <= 250;
                else if (xpRange === 'mid') matchesXp = xp > 250 && xp <= 400;
                else if (xpRange === 'high') matchesXp = xp > 400;

                if (matchesQuery && matchesCat && matchesXp) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            const emptyState = document.getElementById('emptySearchState');
            if (emptyState) {
                emptyState.classList.toggle('hidden', visibleCount > 0);
            }
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('searchInput')?.value) {
                filterMissions();
            }
        });
    </script>
</div>
@endsection
