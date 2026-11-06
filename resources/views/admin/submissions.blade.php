<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="web_dashboard" name="shell-type">
    <title>Panel Verifikator &amp; Validasi Misi | CampusQuest</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-background": "#191c1d",
                        "on-secondary-fixed": "#320047",
                        "on-tertiary-fixed-variant": "#004881",
                        "secondary-fixed-dim": "#ecb2ff",
                        "on-error-container": "#93000a",
                        "surface-container-high": "#e6e8e9",
                        "surface-container": "#eceeef",
                        "border-subtle": "#E5E0FA",
                        "on-tertiary-container": "#f6f8ff",
                        "badge-sky": "#0369A1",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#a2c9ff",
                        "on-primary-container": "#faf6ff",
                        "outline": "#787586",
                        "tertiary-container": "#0074c9",
                        "inverse-primary": "#c6bfff",
                        "on-surface-variant": "#474554",
                        "on-primary": "#ffffff",
                        "secondary-container": "#de8ffd",
                        "secondary-fixed": "#f8d8ff",
                        "secondary": "#873da6",
                        "primary-fixed": "#e4dfff",
                        "surface-dim": "#d8dadb",
                        "tertiary-fixed": "#d3e4ff",
                        "pastel-lavender-start": "#F3F4FF",
                        "on-primary-fixed": "#160066",
                        "primary-container": "#5341cd",
                        "inverse-on-surface": "#eff1f2",
                        "badge-gold": "#92400E",
                        "primary": "#5341cd",
                        "text-primary": "#1E272E",
                        "surface": "#f8fafb",
                        "on-primary-fixed-variant": "#4029ba",
                        "badge-emerald": "#047857",
                        "surface-variant": "#e1e3e4",
                        "surface-tint": "#5847d2",
                        "primary-fixed-dim": "#c6bfff",
                        "background": "#f8fafb",
                        "on-secondary-fixed-variant": "#6c228c",
                        "surface-container-low": "#f2f4f5",
                        "surface-container-highest": "#e1e3e4",
                        "on-secondary-container": "#661a86",
                        "surface-body": "#FAFAFA",
                        "error-container": "#ffdad6",
                        "on-error": "#ffffff",
                        "error": "#ba1a1a",
                        "surface-bright": "#f8fafb",
                        "tertiary": "#005ba0",
                        "surface-sidebar": "#F1F3F4",
                        "on-secondary": "#ffffff",
                        "on-surface": "#191c1d",
                        "surface-card": "#FFFFFF",
                        "surface-container-lowest": "#ffffff",
                        "text-muted": "#475569",
                        "inverse-surface": "#2e3132",
                        "on-tertiary-fixed": "#001c38",
                        "pastel-lavender-end": "#F9F5FF",
                        "outline-variant": "#c8c4d7",
                        "badge-violet": "#5341CD"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "space-xl": "2rem",
                        "space-xs": "0.25rem",
                        "space-md": "1rem",
                        "margin": "1.5rem",
                        "gutter": "1.5rem",
                        "space-sm": "0.5rem",
                        "gutter-sm": "1rem",
                        "space-2xl": "3rem",
                        "margin-lg": "3rem",
                        "space-lg": "1.5rem",
                        "margin-sm": "1rem",
                        "gutter-lg": "2rem"
                    },
                    fontFamily: {
                        "headline-lg-mobile": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-sm": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "headline-xl": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "label-md": ["Inter"]
                    },
                    fontSize: {
                        "headline-lg-mobile": ["22px", {"lineHeight": "30px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700"}],
                        "headline-sm": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "headline-xl-mobile": ["28px", {"lineHeight": "34px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-lg": ["16px", {"lineHeight": "26px", "fontWeight": "400"}],
                        "body-md": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "headline-xl": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
                        "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased overflow-x-hidden">
    @php
        $firstSub = $submissions->first();
    @endphp

    <div id="adminSidebarBackdrop" onclick="closeAdminSidebar()" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden transition-opacity" aria-hidden="true"></div>

    <aside id="adminSidebar" aria-label="Navigasi Verifikator" class="fixed left-0 top-0 h-full w-72 max-w-[calc(100vw-2rem)] bg-surface-sidebar z-50 flex flex-col justify-between p-gutter -translate-x-full lg:translate-x-0 transition-transform duration-300 shadow-lg lg:shadow-none">
        <div class="flex flex-col gap-space-lg">
            <div class="flex items-center justify-between px-space-xs">
                <a href="{{ route('admin.submissions') }}" class="flex items-center gap-space-sm">
                    <x-campusquest-logo />
                    <div class="flex flex-col">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">CampusQuest</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Administrator</span>
                    </div>
                </a>
                <button type="button" onclick="closeAdminSidebar()" aria-label="Tutup Menu" class="lg:hidden min-w-[44px] min-h-[44px] rounded-full hover:bg-surface-card flex items-center justify-center text-on-surface">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">close</span>
                </button>
            </div>
            <nav class="flex flex-col gap-space-xs" aria-label="Menu Verifikator">
                <button type="button" onclick="filterByTab('all'); closeAdminSidebar();" class="flex items-center justify-between px-space-md py-space-sm min-h-[44px] rounded-xl transition-all group bg-primary-container text-on-primary-container shadow-[0_4px_14px_rgba(108,92,231,0.25)] font-label-lg text-left">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-[20px]" aria-hidden="true">verified</span>
                        <span class="font-label-lg text-label-lg">Antrean Validasi</span>
                    </div>
                    <span id="sidebarPendingBadge" class="px-2 py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm">{{ $pendingCount }}</span>
                </button>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm min-h-[44px] rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" href="{{ route('missions.index') }}">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">assignment</span>
                    <span class="font-label-lg text-label-lg">Katalog Quest</span>
                </a>
                <button type="button" onclick="filterByTab('Disetujui'); closeAdminSidebar();" class="flex items-center gap-space-sm px-space-md py-space-sm min-h-[44px] rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all text-left">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">inventory_2</span>
                    <span class="font-label-lg text-label-lg">Riwayat Disetujui</span>
                </button>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm min-h-[44px] rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" href="{{ route('leaderboard') }}">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">analytics</span>
                    <span class="font-label-lg text-label-lg">Laporan &amp; Leaderboard</span>
                </a>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm min-h-[44px] rounded-xl text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">grid_view</span>
                    <span class="font-label-lg text-label-lg">Ke Portal Mahasiswa</span>
                </a>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm min-h-[44px] rounded-xl text-on-surface-variant hover:bg-error-container/50 hover:text-error transition-all" href="{{ route('login') }}">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">logout</span>
                    <span class="font-label-lg text-label-lg">Keluar / SSO</span>
                </a>
            </nav>
        </div>
        <div class="p-space-sm rounded-xl bg-surface-container-lowest shadow-[0_2px_6px_-1px_rgba(0,0,0,0.02)] flex items-center gap-space-xs">
            <span class="material-symbols-outlined text-[18px] text-badge-violet" aria-hidden="true">lock_clock</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Mode Verifikator • Kelompok 5 Tel-U</span>
        </div>
    </aside>

    <div class="lg:pl-72">
        <header class="fixed top-0 left-0 lg:left-72 right-0 h-16 bg-surface/95 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-30 px-4 lg:px-gutter flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-3">
                <button type="button" onclick="openAdminSidebar()" aria-label="Buka Menu Verifikator" aria-controls="adminSidebar" aria-expanded="false" id="adminMenuBtn" class="lg:hidden min-w-[44px] min-h-[44px] rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start flex items-center justify-center text-on-surface">
                    <span class="material-symbols-outlined text-[22px]" aria-hidden="true">menu</span>
                </button>
                <span class="hidden sm:inline-flex px-space-sm py-1 rounded-full bg-pastel-lavender-start text-badge-violet font-label-md text-label-md font-semibold">Portal Verifikator Kampus</span>
                <div class="relative hidden md:flex items-center w-72">
                    <label for="headerQuickSearch" class="sr-only">Cari Mahasiswa atau NIM</label>
                    <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]" aria-hidden="true">search</span>
                    <input id="headerQuickSearch" oninput="handleQuickSearch(this.value)" class="w-full pl-9 pr-space-md py-1.5 bg-surface-card rounded-xl font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant focus:ring-2 focus:ring-primary shadow-xs" placeholder="Cari Mahasiswa, NIM, atau Quest..." type="search">
                </div>
            </div>
            <div class="flex items-center gap-space-sm">
                <div class="flex items-center gap-space-sm pl-space-sm">
                    <div class="flex flex-col text-right hidden sm:flex">
                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Admin Kemahasiswaan Tel-U</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">NIP-99001 • Direktorat Kemahasiswaan</span>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-md font-bold" aria-hidden="true">
                        AK
                    </div>
                </div>
            </div>
        </header>

        <main class="relative pt-20 w-full px-4 lg:px-gutter bg-background">
            <div class="flex flex-col w-full pb-space-2xl">
                <header class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md mb-space-xl">
                    <div class="flex flex-col gap-1 max-w-2xl">
                        <div class="flex flex-wrap items-center gap-space-xs">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-pastel-lavender-start text-badge-violet font-label-sm text-label-sm">
                                PIC: Nayla Assyifa (103032400078) • Epic 1
                            </span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                                Basis Data Aktif SQLite
                            </span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
                            Dashboard Validasi &amp; Persetujuan Misi
                        </h1>
                        <p class="font-body-md text-body-md text-text-muted leading-relaxed">
                            Evaluasi berkas pengajuan mahasiswa Kelompok 5 untuk menyetujui perolehan XP secara langsung ke database dan memperbarui portofolio prestasi.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-space-sm self-start lg:self-center">
                        <a href="{{ route('submissions.index') }}" class="inline-flex items-center gap-space-xs px-space-md py-2.5 min-h-[44px] bg-surface-card rounded-full shadow-sm text-on-surface font-label-md text-label-md hover:bg-surface-container-low hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-[18px] text-badge-sky" aria-hidden="true">upload_file</span>
                            + Buat Pengajuan Mahasiswa
                        </a>
                    </div>
                </header>

                @if(session('success'))
                    <div role="alert" class="mb-6 p-4 rounded-2xl bg-badge-emerald/15 border border-badge-emerald/30 text-badge-emerald font-label-md text-label-md flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]" aria-hidden="true">check_circle</span>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md mb-space-xl">
                    <div class="relative p-space-md rounded-2xl bg-surface-card shadow-xs flex flex-col justify-between overflow-hidden">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="font-label-md text-label-md text-text-muted">Menunggu Validasi</span>
                                <div class="flex items-baseline gap-space-xs mt-1">
                                    <h2 id="metricPendingCount" class="font-headline-xl text-headline-xl text-on-surface font-bold">{{ $pendingCount }}</h2>
                                    <span class="font-label-sm text-label-sm text-text-muted">Pengajuan</span>
                                </div>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-[#FEF9E7] flex items-center justify-center text-badge-gold">
                                <span class="material-symbols-outlined text-[22px]" aria-hidden="true">hourglass_top</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-xs">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-[#FEF9E7] text-badge-gold font-label-sm text-label-sm font-semibold">
                                Antrean Aktif
                            </span>
                            <span class="font-label-sm text-label-sm text-text-muted">Perlu Evaluasi</span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-badge-gold/60"></div>
                    </div>

                    <div class="relative p-space-md rounded-2xl bg-surface-card shadow-xs flex flex-col justify-between overflow-hidden">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="font-label-md text-label-md text-text-muted">Total Disetujui</span>
                                <div class="flex items-baseline gap-space-xs mt-1">
                                    <h2 id="metricApprovedCount" class="font-headline-xl text-headline-xl text-on-surface font-bold">{{ $approvedCount }}</h2>
                                    <span class="font-label-sm text-label-sm text-text-muted">Berkas</span>
                                </div>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-badge-emerald/15 flex items-center justify-center text-badge-emerald">
                                <span class="material-symbols-outlined text-[22px]" aria-hidden="true">verified_user</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-xs">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[14px]" aria-hidden="true">bolt</span> +<span id="metricDistributedXp">{{ number_format($totalDistributedXp) }}</span> XP Cair
                            </span>
                            <span class="font-label-sm text-label-sm text-badge-emerald">Tercatat di DB</span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-badge-emerald"></div>
                    </div>

                    <div class="relative p-space-md rounded-2xl bg-surface-card shadow-xs flex flex-col justify-between overflow-hidden">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="font-label-md text-label-md text-text-muted">Perlu Revisi / Ditolak</span>
                                <div class="flex items-baseline gap-space-xs mt-1">
                                    <h2 id="metricRejectedCount" class="font-headline-xl text-headline-xl text-error font-bold">{{ $rejectedCount }}</h2>
                                    <span class="font-label-sm text-label-sm text-text-muted">Pengajuan</span>
                                </div>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-error-container flex items-center justify-center text-error">
                                <span class="material-symbols-outlined text-[22px]" aria-hidden="true">assignment_late</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-xs">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">
                                Evaluasi Berkas
                            </span>
                            <span class="font-label-sm text-label-sm text-text-muted">Menunggu Perbaikan</span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-error"></div>
                    </div>

                    <div class="relative p-space-md rounded-2xl bg-surface-card shadow-xs flex flex-col justify-between overflow-hidden">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="font-label-md text-label-md text-text-muted">Total Pengajuan Masuk</span>
                                <div class="flex items-baseline gap-space-xs mt-1">
                                    <h2 class="font-headline-xl text-headline-xl text-badge-violet font-bold">{{ $submissions->count() }}</h2>
                                    <span class="font-label-sm text-label-sm text-text-muted">Total Data</span>
                                </div>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-pastel-lavender-start flex items-center justify-center text-badge-violet">
                                <span class="material-symbols-outlined text-[22px]" aria-hidden="true">folder_open</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-xs">
                            <span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-text-muted">
                                {{ $missions->count() }} Misi Katalog Aktif
                            </span>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-bold">
                                Sinkron
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-badge-violet"></div>
                    </div>
                </section>

                <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
                    <div class="xl:col-span-8 flex flex-col gap-space-md">
                        <div class="p-space-md rounded-2xl bg-surface-card shadow-xs flex flex-col gap-space-md">
                            <div class="flex flex-wrap items-center justify-between gap-space-sm pb-space-sm">
                                <div class="flex flex-wrap items-center gap-space-xs bg-surface-container-low p-1 rounded-full" role="tablist" aria-label="Filter Status Pengajuan">
                                    <button type="button" class="tab-btn px-space-md py-2 min-h-[40px] rounded-full bg-surface-card text-on-surface font-label-sm text-label-sm shadow-sm font-bold transition-all" id="tab-all" onclick="filterByTab('all')">
                                        Semua ({{ $submissions->count() }})
                                    </button>
                                    <button type="button" class="tab-btn px-space-md py-2 min-h-[40px] rounded-full text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-all" id="tab-Menunggu" onclick="filterByTab('Menunggu')">
                                        Menunggu ({{ $pendingCount }})
                                    </button>
                                    <button type="button" class="tab-btn px-space-md py-2 min-h-[40px] rounded-full text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-all" id="tab-Disetujui" onclick="filterByTab('Disetujui')">
                                        Disetujui ({{ $approvedCount }})
                                    </button>
                                    <button type="button" class="tab-btn px-space-md py-2 min-h-[40px] rounded-full text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-all" id="tab-Ditolak" onclick="filterByTab('Ditolak')">
                                        Ditolak ({{ $rejectedCount }})
                                    </button>
                                </div>
                            </div>
                            <div class="relative w-full">
                                <label for="queueSearchInput" class="sr-only">Cari nama mahasiswa, NIM, atau judul quest</label>
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]" aria-hidden="true">manage_search</span>
                                <input class="w-full pl-11 pr-space-md py-2.5 bg-surface-container-lowest rounded-xl font-body-sm text-body-sm text-on-surface placeholder:text-text-muted focus:ring-2 focus:ring-primary shadow-sm" id="queueSearchInput" oninput="handleQuickSearch(this.value)" placeholder="Cari nama mahasiswa Kelompok 5, NIM, atau judul quest..." type="search">
                            </div>
                        </div>

                        <div class="flex flex-col gap-space-sm" id="queueListContainer">
                            @forelse($submissions as $sub)
                                @php
                                    $initials = collect(explode(' ', $sub->user->name ?? 'Mahasiswa'))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('');
                                    $rewardXp = $sub->mission->xp_reward ?? 150;
                                @endphp
                                <div class="queue-card p-space-md rounded-2xl bg-surface-card shadow-xs transition-all hover:-translate-y-0.5 {{ $loop->first ? 'ring-2 ring-primary' : '' }}"
                                     data-id="{{ $sub->id }}"
                                     data-status="{{ $sub->status }}"
                                     data-name="{{ $sub->user->name ?? 'Mahasiswa' }}"
                                     data-nim="{{ $sub->user->nim ?? '-' }}"
                                     data-faculty="{{ $sub->user->faculty ?? 'Telkom University' }}"
                                     data-quest="{{ $sub->mission->title ?? 'Misi Kampus' }}"
                                     data-reward="{{ $rewardXp }}"
                                     data-file="{{ $sub->proof_file }}"
                                     data-notes="{{ $sub->notes }}"
                                     id="row-item-{{ $sub->id }}">
                                    <div class="flex flex-col gap-space-sm">
                                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pb-1">
                                            <div class="flex items-center gap-space-sm min-w-0">
                                                <div class="relative shrink-0">
                                                    <div class="w-12 h-12 rounded-full bg-pastel-lavender-start text-primary ring-2 ring-primary-fixed flex items-center justify-center font-headline-sm font-bold" aria-hidden="true">
                                                        {{ $initials }}
                                                    </div>
                                                </div>
                                                <div class="flex flex-col min-w-0">
                                                    <div class="flex items-center gap-space-xs flex-wrap">
                                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold truncate">{{ $sub->user->name ?? 'Mahasiswa' }}</h3>
                                                        <span class="px-2 py-0.5 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold">Level {{ $sub->user->level ?? 1 }}</span>
                                                    </div>
                                                    <span class="font-body-sm text-body-sm text-text-muted truncate">NIM: {{ $sub->user->nim ?? '-' }} • {{ $sub->user->faculty ?? 'Telkom University' }}</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-space-xs shrink-0 self-start sm:self-auto">
                                                <span class="px-2.5 py-1 rounded-full bg-pastel-lavender-start text-badge-violet font-label-sm text-label-sm font-semibold">{{ $sub->mission->category ?? 'Kegiatan' }}</span>
                                                <div class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-badge-violet font-headline-sm text-headline-sm font-bold whitespace-nowrap">
                                                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">bolt</span> +{{ $rewardXp }} XP
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-1.5">
                                            <div class="flex items-center justify-between gap-space-xs">
                                                <span class="font-body-sm text-body-sm text-text-muted">Catatan: {{ $sub->notes ?: 'Tidak ada catatan tambahan.' }}</span>
                                                <span id="status-badge-{{ $sub->id }}" class="px-2.5 py-0.5 rounded-full font-label-sm text-label-sm font-semibold {{ $sub->status === 'Disetujui' ? 'bg-badge-emerald text-on-primary' : ($sub->status === 'Ditolak' ? 'bg-error-container text-on-error-container' : 'bg-pastel-lavender-start text-badge-violet') }}">
                                                    {{ $sub->status }}
                                                </span>
                                            </div>
                                            <h4 class="font-label-lg text-label-lg text-on-surface font-semibold leading-snug">{{ $sub->mission->title ?? 'Misi Kampus' }}</h4>
                                        </div>

                                        <div class="flex flex-wrap items-center justify-between gap-space-sm pt-1">
                                            <div class="flex items-center gap-space-xs min-w-0">
                                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-2 min-h-[40px] rounded-full bg-surface-container-lowest hover:bg-pastel-lavender-start text-on-surface font-body-sm text-body-sm group transition-colors shadow-sm" onclick="loadReviewInspector({{ $sub->id }})">
                                                    <span class="material-symbols-outlined text-[16px] text-error" aria-hidden="true">picture_as_pdf</span>
                                                    <span class="font-medium truncate max-w-[200px]">{{ $sub->proof_file }}</span>
                                                    <span class="material-symbols-outlined text-[16px] text-badge-violet group-hover:translate-x-0.5 transition-transform" aria-hidden="true">visibility</span>
                                                </button>
                                            </div>
                                            <div class="flex items-center gap-2 shrink-0">
                                                <button type="button" class="inline-flex items-center gap-1 px-4 py-2 min-h-[40px] rounded-full bg-badge-emerald text-on-primary font-label-sm text-label-sm font-bold shadow-sm hover:opacity-90 transition-all whitespace-nowrap" onclick="updateSubmissionStatus({{ $sub->id }}, 'Disetujui')" title="Setujui Pengajuan">
                                                    <span class="material-symbols-outlined text-[16px]" aria-hidden="true">check_circle</span> Setujui
                                                </button>
                                                <button type="button" class="inline-flex items-center gap-1 px-4 py-2 min-h-[40px] rounded-full bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-sm text-label-sm font-semibold transition-all whitespace-nowrap" onclick="updateSubmissionStatus({{ $sub->id }}, 'Ditolak')" title="Tolak Pengajuan">
                                                    <span class="material-symbols-outlined text-[16px]" aria-hidden="true">cancel</span> Tolak
                                                </button>
                                                <button type="button" aria-label="Inspeksi Detail di Panel Kanan" class="w-10 h-10 rounded-full hover:bg-surface-container text-on-surface-variant flex items-center justify-center transition-colors" onclick="loadReviewInspector({{ $sub->id }})" title="Inspeksi Detail">
                                                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">open_in_new</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="p-10 rounded-2xl bg-surface-card text-center space-y-2">
                                    <span class="material-symbols-outlined text-[36px] text-text-muted" aria-hidden="true">inbox</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Belum Ada Pengajuan Masuk</h3>
                                    <p class="font-body-sm text-body-sm text-text-muted">Saat ini belum ada pengajuan bukti kegiatan dari mahasiswa.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="xl:col-span-4 flex flex-col gap-space-md sticky top-20">
                        <div class="p-space-lg rounded-3xl bg-surface-card shadow-md flex flex-col gap-space-md">
                            <div class="flex items-start justify-between">
                                <div class="flex flex-col">
                                    <span class="font-label-sm text-label-sm text-badge-violet uppercase tracking-wider font-bold">Panel Inspeksi Berkas</span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold" id="sandboxStudentName">{{ $firstSub->user->name ?? 'Pilih Pengajuan' }}</h3>
                                    <span class="font-body-sm text-body-sm text-text-muted" id="sandboxStudentNim">NIM {{ $firstSub->user->nim ?? '-' }} • {{ $firstSub->user->faculty ?? 'Telkom University' }}</span>
                                </div>
                                <span id="sandboxStatusPill" class="px-2.5 py-1 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold">
                                    {{ $firstSub->status ?? 'Siap' }}
                                </span>
                            </div>

                            <div class="p-space-sm rounded-xl bg-pastel-lavender-start flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm text-badge-violet font-semibold">Misi Capaian</span>
                                    <span class="font-label-sm text-label-sm font-bold text-primary" id="sandboxRewardPill">+{{ $firstSub->mission->xp_reward ?? 0 }} XP</span>
                                </div>
                                <p class="font-label-md text-label-md text-on-surface font-bold leading-snug" id="sandboxQuestTitle">
                                    {{ $firstSub->mission->title ?? 'Tidak ada misi terpilih' }}
                                </p>
                            </div>

                            <div class="relative rounded-2xl overflow-hidden bg-surface-container p-space-sm flex flex-col items-center justify-center text-center">
                                <div class="w-full h-32 rounded-xl bg-surface-card flex flex-col items-center justify-center p-space-sm shadow-inner">
                                    <span class="material-symbols-outlined text-[40px] text-badge-violet mb-1" aria-hidden="true">description</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold max-w-[220px] truncate" id="sandboxFileName">{{ $firstSub->proof_file ?? '-' }}</span>
                                    <span class="font-body-sm text-body-sm text-text-muted mt-0.5" id="sandboxNotesText">{{ $firstSub->notes ?? '-' }}</span>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-sm text-label-sm text-on-surface font-bold flex items-center justify-between" for="verifierNotes">
                                    <span>Catatan Evaluasi Verifikator</span>
                                    <span class="text-text-muted font-normal">Tersimpan ke DB</span>
                                </label>
                                <textarea class="w-full p-space-sm rounded-xl bg-surface-container-lowest font-body-sm text-body-sm text-on-surface placeholder:text-text-muted focus:ring-2 focus:ring-primary shadow-sm resize-none" id="verifierNotes" placeholder="Tuliskan catatan apresiasi atau alasan penolakan berkas..." rows="2"></textarea>
                            </div>

                            <div class="flex flex-col gap-2 pt-1">
                                <button type="button" class="w-full py-2.5 px-space-md min-h-[44px] rounded-full bg-badge-emerald text-on-primary font-label-md text-label-md font-bold shadow-sm hover:opacity-95 transition-all flex items-center justify-center gap-space-xs" id="sandboxApproveBtn" onclick="submitSandboxDecision('Disetujui')">
                                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">verified</span>
                                    <span id="sandboxApproveText">Setujui &amp; Cairkan XP</span>
                                </button>
                                <button type="button" class="w-full py-2.5 px-space-md min-h-[44px] rounded-full bg-error-container text-on-error-container font-label-md text-label-md font-semibold hover:bg-error hover:text-on-error transition-all flex items-center justify-center gap-space-xs" id="sandboxRejectBtn" onclick="submitSandboxDecision('Ditolak')">
                                    <span class="material-symbols-outlined text-[18px]" aria-hidden="true">cancel</span>
                                    <span>Tolak Pengajuan &amp; Minta Revisi</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="status" aria-live="polite" class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toastNotification">
                    <div class="flex items-center gap-space-sm px-space-lg py-space-sm rounded-full bg-inverse-surface text-inverse-on-surface shadow-2xl">
                        <span class="material-symbols-outlined text-[20px] text-on-primary" id="toastIcon" aria-hidden="true">check_circle</span>
                        <span class="font-body-sm text-body-sm font-medium" id="toastMessage">Status berhasil diperbarui.</span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        let activeInspectedId = {{ $firstSub->id ?? 0 }};
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        function openAdminSidebar() {
            document.getElementById('adminSidebar')?.classList.remove('-translate-x-full');
            document.getElementById('adminSidebarBackdrop')?.classList.remove('hidden');
            document.getElementById('adminMenuBtn')?.setAttribute('aria-expanded', 'true');
        }

        function closeAdminSidebar() {
            document.getElementById('adminSidebar')?.classList.add('-translate-x-full');
            document.getElementById('adminSidebarBackdrop')?.classList.add('hidden');
            document.getElementById('adminMenuBtn')?.setAttribute('aria-expanded', 'false');
        }

        function triggerToast(msg) {
            const toast = document.getElementById('toastNotification');
            const text = document.getElementById('toastMessage');
            if (!toast || !text) return;
            text.innerText = msg;
            toast.classList.remove('translate-y-24', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3200);
        }

        function loadReviewInspector(id) {
            activeInspectedId = id;
            const card = document.getElementById('row-item-' + id);
            if (!card) return;

            document.getElementById('sandboxStudentName').innerText = card.getAttribute('data-name');
            document.getElementById('sandboxStudentNim').innerText = 'NIM ' + card.getAttribute('data-nim') + ' • ' + card.getAttribute('data-faculty');
            document.getElementById('sandboxQuestTitle').innerText = card.getAttribute('data-quest');
            document.getElementById('sandboxRewardPill').innerText = '+' + card.getAttribute('data-reward') + ' XP';
            document.getElementById('sandboxFileName').innerText = card.getAttribute('data-file');
            document.getElementById('sandboxNotesText').innerText = card.getAttribute('data-notes') || '-';
            document.getElementById('sandboxStatusPill').innerText = card.getAttribute('data-status');

            document.querySelectorAll('.queue-card').forEach(c => c.classList.remove('ring-2', 'ring-primary'));
            card.classList.add('ring-2', 'ring-primary');
        }

        async function updateSubmissionStatus(id, status, customNotes = null) {
            const card = document.getElementById('row-item-' + id);
            const notesVal = customNotes !== null ? customNotes : document.getElementById('verifierNotes')?.value;

            try {
                const res = await fetch('/admin/submissions/' + id + '/status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        status: status,
                        notes: notesVal || undefined
                    })
                });
                const data = await res.json();
                if (data.success && card) {
                    card.setAttribute('data-status', status);
                    const badge = document.getElementById('status-badge-' + id);
                    if (badge) {
                        badge.innerText = status;
                        badge.className = 'px-2.5 py-0.5 rounded-full font-label-sm text-label-sm font-semibold ' +
                            (status === 'Disetujui' ? 'bg-badge-emerald text-on-primary' : 'bg-error-container text-on-error-container');
                    }
                    if (activeInspectedId === id) {
                        document.getElementById('sandboxStatusPill').innerText = status;
                    }
                    triggerToast('Status pengajuan ' + data.student_name + ' diperbarui ke ' + status + '!');
                }
            } catch (err) {
                triggerToast('Gagal menghubungi server.');
            }
        }

        function submitSandboxDecision(status) {
            if (!activeInspectedId) return;
            updateSubmissionStatus(activeInspectedId, status);
        }

        function handleQuickSearch(keyword) {
            const q = (keyword || '').toLowerCase().trim();
            document.querySelectorAll('.queue-card').forEach(card => {
                const text = card.innerText.toLowerCase();
                card.style.display = text.includes(q) ? '' : 'none';
            });
        }

        function filterByTab(statusFilter) {
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-surface-card', 'text-on-surface', 'shadow-sm', 'font-bold');
                btn.classList.add('text-on-surface-variant');
            });
            const active = document.getElementById('tab-' + statusFilter);
            if (active) {
                active.classList.add('bg-surface-card', 'text-on-surface', 'shadow-sm', 'font-bold');
                active.classList.remove('text-on-surface-variant');
            }

            document.querySelectorAll('.queue-card').forEach(card => {
                const cardStatus = card.getAttribute('data-status');
                card.style.display = (statusFilter === 'all' || cardStatus === statusFilter) ? '' : 'none';
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeAdminSidebar();
            }
        });
    </script>
</body>
</html>
