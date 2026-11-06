<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta content="web_dashboard" name="shell-type"/>
    <title>@yield('title', 'CampusQuest') | Portal Gamifikasi &amp; Portofolio Mahasiswa</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-thumb { background: #d8dadb; border-radius: 9999px; }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary-fixed-variant": "#004881",
                        "on-secondary-fixed": "#320047",
                        "surface-card": "#FFFFFF",
                        "tertiary-fixed": "#d3e4ff",
                        "surface-variant": "#e1e3e4",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary-fixed-variant": "#4029ba",
                        "badge-violet": "#5341CD",
                        "on-primary-container": "#faf6ff",
                        "inverse-primary": "#c6bfff",
                        "tertiary-container": "#0074c9",
                        "on-background": "#191c1d",
                        "outline": "#787586",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#f8fafb",
                        "tertiary": "#005ba0",
                        "on-surface-variant": "#474554",
                        "primary-fixed": "#e4dfff",
                        "surface-tint": "#5847d2",
                        "surface-sidebar": "#F1F3F4",
                        "on-surface": "#191c1d",
                        "tertiary-fixed-dim": "#a2c9ff",
                        "on-secondary-container": "#661a86",
                        "badge-emerald": "#047857",
                        "on-error": "#ffffff",
                        "surface-container": "#eceeef",
                        "pastel-lavender-start": "#F3F4FF",
                        "secondary-fixed-dim": "#ecb2ff",
                        "border-subtle": "#E5E0FA",
                        "pastel-lavender-end": "#F9F5FF",
                        "on-tertiary-container": "#f6f8ff",
                        "primary": "#5341cd",
                        "text-muted": "#475569",
                        "secondary": "#873da6",
                        "inverse-on-surface": "#eff1f2",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#001c38",
                        "surface-bright": "#f8fafb",
                        "secondary-container": "#de8ffd",
                        "surface-body": "#FAFAFA",
                        "primary-fixed-dim": "#c6bfff",
                        "error-container": "#ffdad6",
                        "error": "#ba1a1a",
                        "background": "#f8fafb",
                        "inverse-surface": "#2e3132",
                        "outline-variant": "#c8c4d7",
                        "primary-container": "#5341cd",
                        "badge-gold": "#92400E",
                        "surface-dim": "#d8dadb",
                        "on-primary-fixed": "#160066",
                        "on-secondary-fixed-variant": "#6c228c",
                        "surface-container-low": "#f2f4f5",
                        "on-tertiary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "badge-sky": "#0369A1",
                        "secondary-fixed": "#f8d8ff",
                        "surface-container-high": "#e6e8e9",
                        "on-error-container": "#93000a",
                        "text-primary": "#1E272E"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "margin": "1.5rem",
                        "gutter": "1.5rem",
                        "margin-sm": "1rem",
                        "space-lg": "1.5rem",
                        "gutter-lg": "2rem",
                        "space-xs": "0.25rem",
                        "space-md": "1rem",
                        "gutter-sm": "1rem",
                        "space-sm": "0.5rem",
                        "space-2xl": "3rem",
                        "margin-lg": "3rem",
                        "space-xl": "2rem"
                    },
                    fontFamily: {
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-xl": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    fontSize: {
                        "body-md": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
                        "headline-sm": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "body-lg": ["16px", {"lineHeight": "26px", "fontWeight": "400"}],
                        "headline-xl-mobile": ["28px", {"lineHeight": "34px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-sm": ["12px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "headline-xl": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700"}],
                        "headline-lg-mobile": ["22px", {"lineHeight": "30px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                }
            }
        };
    </script>
    @stack('styles')
</head>
<body class="bg-surface-body font-body-md text-on-surface antialiased overflow-x-hidden">
    @php
        $navStudent = \App\Models\User::where('role', 'mahasiswa')->orderByDesc('xp')->first();
        $navInitials = $navStudent ? collect(explode(' ', $navStudent->name))->map(fn($w) => strtoupper(substr($w, 0, 1)))->take(2)->implode('') : 'CQ';
    @endphp

    <div id="mobileSidebarBackdrop" onclick="closeMobileSidebar()" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden transition-opacity" aria-hidden="true"></div>

    <aside id="appSidebar" aria-label="Navigasi Utama" class="fixed left-4 lg:left-6 top-4 lg:top-6 bottom-4 lg:bottom-6 w-[280px] max-w-[calc(100vw-2rem)] bg-surface-sidebar rounded-[24px] z-50 flex flex-col p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.08)] -translate-x-[120%] lg:translate-x-0 transition-transform duration-300">
        <div class="flex items-center justify-between px-2 mb-6">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 text-decoration-none">
                <x-campusquest-logo />
                <div class="flex flex-col">
                    <span class="font-headline-sm text-headline-sm text-text-primary tracking-tight leading-tight">CampusQuest</span>
                    <span class="font-label-sm text-label-sm text-text-muted">Telkom University</span>
                </div>
            </a>
            <button type="button" onclick="closeMobileSidebar()" aria-label="Tutup Menu Navigasi" class="lg:hidden min-w-[44px] min-h-[44px] rounded-full hover:bg-surface-card flex items-center justify-center text-text-primary">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">close</span>
            </button>
        </div>

        <nav class="flex-1 flex flex-col gap-1.5 overflow-y-auto" aria-label="Menu Modul CampusQuest">
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('dashboard*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">grid_view</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('missions*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('missions.index') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">explore</span>
                <span>Katalog Quest</span>
            </a>
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('submissions*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('submissions.index') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">upload_file</span>
                <span>Pengajuan Misi</span>
            </a>
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('leaderboard*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('leaderboard') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">emoji_events</span>
                <span>Leaderboard</span>
            </a>
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('portfolio*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('portfolio.index') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">folder_shared</span>
                <span>Portofolio Digital</span>
            </a>
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('teams*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('teams.index') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">group</span>
                <span>Tim &amp; Kolaborasi</span>
            </a>

            <div class="my-2 border-t border-outline-variant/40"></div>

            <a class="flex items-center justify-between px-4 py-2.5 min-h-[44px] rounded-full transition-all font-label-lg text-label-lg {{ request()->is('admin*') ? 'bg-primary-container text-on-primary-container shadow-md' : 'text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary' }}" href="{{ route('admin.submissions') }}">
                <div class="flex items-center gap-3.5">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">verified_user</span>
                    <span>Panel Verifikator</span>
                </div>
                <span class="px-2 py-0.5 rounded-full bg-pastel-lavender-start text-badge-violet font-label-sm text-label-sm">Admin</span>
            </a>
            <a class="flex items-center gap-3.5 px-4 py-2.5 min-h-[44px] rounded-full text-on-surface-variant hover:bg-error-container/50 hover:text-error transition-all font-label-lg text-label-lg" href="{{ route('login') }}">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">logout</span>
                <span>Halaman Login / SSO</span>
            </a>
        </nav>

        <div class="mt-auto pt-4">
            <div class="bg-surface-card rounded-[18px] p-4 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[18px]" aria-hidden="true">school</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-text-primary leading-tight">S1 Teknologi Informasi</p>
                        <p class="font-body-sm text-body-sm text-text-muted leading-tight">Kelompok 5 • Tel-U</p>
                    </div>
                </div>
                <span class="material-symbols-outlined text-badge-violet text-[18px]" aria-hidden="true">verified</span>
            </div>
        </div>
    </aside>

    <div class="pl-4 pr-4 lg:pl-[328px] lg:pr-6">
        <header class="fixed top-4 lg:top-6 left-4 lg:left-[328px] right-4 lg:right-6 h-20 bg-surface-card/95 backdrop-blur-md rounded-[20px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] z-30 px-4 lg:px-6 flex items-center justify-between gap-3">
            <div class="flex items-center gap-3 flex-1 max-w-md">
                <button type="button" onclick="openMobileSidebar()" aria-label="Buka Menu Navigasi" aria-controls="appSidebar" aria-expanded="false" id="mobileMenuBtn" class="lg:hidden min-w-[44px] min-h-[44px] rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start flex items-center justify-center text-text-primary shrink-0">
                    <span class="material-symbols-outlined text-[22px]" aria-hidden="true">menu</span>
                </button>
                <form action="{{ route('missions.index') }}" method="GET" class="relative flex items-center w-full" role="search">
                    <label for="globalSearchInput" class="sr-only">Cari quest, aktivitas, atau rekan tim</label>
                    <span class="material-symbols-outlined absolute left-3.5 text-text-muted text-[20px]" aria-hidden="true">search</span>
                    <input id="globalSearchInput" name="q" value="{{ request('q') }}" class="w-full pl-10 pr-4 py-2 bg-pastel-lavender-start/60 text-text-primary placeholder:text-text-muted rounded-xl font-body-md text-body-md focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all" placeholder="Cari quest, aktivitas, atau rekan tim..." type="search"/>
                </form>
            </div>
            <div class="flex items-center gap-2 sm:gap-3 shrink-0">
                <a href="{{ route('dashboard') }}" class="hidden sm:flex items-center gap-2 px-3.5 py-2 bg-gradient-to-r from-pastel-lavender-start to-pastel-lavender-end rounded-full">
                    <span class="material-symbols-outlined text-primary text-[18px]" aria-hidden="true">workspace_premium</span>
                    <span class="font-label-md text-label-md text-primary font-bold">
                        Level {{ $navStudent->level ?? 8 }} • {{ number_format($navStudent->xp ?? 1950) }} XP
                    </span>
                </a>
                <a href="{{ route('submissions.index') }}" aria-label="Status Pengajuan & Notifikasi" class="relative min-w-[44px] min-h-[44px] rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start flex items-center justify-center text-on-surface-variant transition-colors" title="Lihat Status Pengajuan Misi">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">notifications</span>
                    <span class="absolute top-2.5 right-2.5 w-2 h-2 rounded-full bg-primary ring-2 ring-surface-card"></span>
                </a>
                <a href="{{ route('portfolio.index') }}" class="flex items-center gap-2.5 pl-2 py-1 pr-2 sm:pr-3 rounded-full hover:bg-surface-sidebar/70 transition-colors">
                    <div class="text-right hidden md:block">
                        <p class="font-label-md text-label-md text-text-primary leading-tight">{{ $navStudent->name ?? 'Nathasya Yuan Maharani' }}</p>
                        <p class="font-body-sm text-body-sm text-text-muted leading-tight">NIM {{ $navStudent->nim ?? '103032400001' }}</p>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-md text-label-md font-bold ring-2 ring-border-subtle shrink-0" aria-hidden="true">
                        {{ $navInitials }}
                    </div>
                </a>
            </div>
        </header>

        <main class="relative pt-28 w-full min-h-screen pb-10">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script>
        function openMobileSidebar() {
            const sidebar = document.getElementById('appSidebar');
            const backdrop = document.getElementById('mobileSidebarBackdrop');
            const btn = document.getElementById('mobileMenuBtn');
            if (sidebar) sidebar.classList.remove('-translate-x-[120%]');
            if (backdrop) backdrop.classList.remove('hidden');
            if (btn) btn.setAttribute('aria-expanded', 'true');
        }

        function closeMobileSidebar() {
            const sidebar = document.getElementById('appSidebar');
            const backdrop = document.getElementById('mobileSidebarBackdrop');
            const btn = document.getElementById('mobileMenuBtn');
            if (sidebar) sidebar.classList.add('-translate-x-[120%]');
            if (backdrop) backdrop.classList.add('hidden');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileSidebar();
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
