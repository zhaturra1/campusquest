<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Masuk ke CampusQuest | SSO Kampus Terpadu</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/regular/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/bold/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/fill/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            500: '#6c5ce7',
                            600: '#5341cd',
                            700: '#4838b8',
                            surface: '#f8fafb',
                        }
                    },
                    borderRadius: {
                        '2xl': '1rem',
                        '3xl': '1.5rem',
                    }
                }
            }
        };
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafb;
            color: #1e293b;
        }
        .soft-shadow {
            box-shadow: 0 10px 40px -10px rgba(108, 92, 231, 0.08), 0 2px 10px -2px rgba(0, 0, 0, 0.04);
        }
        .soft-gradient-card {
            background: linear-gradient(145deg, #ffffff 0%, #f6f5ff 100%);
        }
        .pill-active {
            background: #5341cd;
            color: #ffffff;
            box-shadow: 0 4px 14px rgba(83, 65, 205, 0.25);
        }
        .pill-inactive {
            background: #f1f3f5;
            color: #475569;
        }
    </style>
</head>
<body class="min-h-screen bg-[#f8fafb] flex flex-col justify-between selection:bg-brand-100 selection:text-brand-700">
    <header class="w-full px-6 lg:px-12 py-5 flex items-center justify-between border-b border-slate-100 bg-white/95 backdrop-blur-md sticky top-0 z-30">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <x-campusquest-logo />
            <div>
                <div class="font-bold text-lg text-slate-800 tracking-tight flex items-center gap-2">
                    CampusQuest
                    <span class="text-[10px] font-semibold tracking-wider uppercase px-2 py-0.5 rounded-full bg-brand-50 text-brand-600 border border-brand-200">Telkom University</span>
                </div>
                <p class="text-xs text-slate-600">Portal Gamifikasi &amp; Portofolio Mahasiswa</p>
            </div>
        </a>
        <div class="flex items-center gap-4 text-xs font-medium text-slate-600">
            <div class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200">
                <i class="ph-fill ph-shield-check text-emerald-700 text-sm" aria-hidden="true"></i>
                <span>Integrasi Akademik &amp; Kemahasiswaan Tel-U</span>
            </div>
            <button type="button" onclick="openInfoModal('Pusat Bantuan SSO', 'Gunakan NIM mahasiswa Kelompok 5 (contoh: 103032400035) atau NIP Admin (NIP-99001) dengan kata sandi password123 untuk masuk ke sistem CampusQuest.')" class="flex items-center gap-1.5 text-slate-600 hover:text-brand-600 transition-colors py-2 px-3 min-h-[44px] rounded-lg hover:bg-brand-50">
                <i class="ph-bold ph-question text-base" aria-hidden="true"></i>
                <span>Pusat Bantuan</span>
            </button>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-6 py-8 lg:py-12 flex items-center">
        <div class="w-full flex flex-col items-center gap-10 lg:gap-12">
            <div class="w-full max-w-5xl mx-auto flex flex-col items-center text-center space-y-6">
                <div class="space-y-4 flex flex-col items-center max-w-3xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-brand-600 text-xs font-semibold">
                        <i class="ph-fill ph-student text-brand-600" aria-hidden="true"></i>
                        <span>Ekosistem Pengembangan Diri Mahasiswa • Kelompok 5 Tel-U</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-[1.2]">
                        Satu Pintu Menuju Petualangan Kampus &amp; Portofolio Kredibel.
                    </h1>
                    <p class="text-slate-600 text-base leading-relaxed max-w-2xl mx-auto">
                        Masuk dengan akun kampus untuk menjelajahi katalog misi kegiatan, mengajukan bukti sertifikat untuk divalidasi kemahasiswaan, berkolaborasi dalam tim, dan menyusun portofolio prestasi digital.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full pt-2 text-left">
                    <div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-800 flex items-center justify-center shrink-0 border border-amber-100" aria-hidden="true">
                            <i class="ph-fill ph-trophy text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-sm font-semibold text-slate-800">Klaim XP &amp; Leveling</h2>
                            <p class="text-xs text-slate-600 mt-0.5 leading-snug">Bukti kegiatan terverifikasi menaikkan XP, level, dan badge mahasiswa.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-2xl bg-indigo-50 text-brand-600 flex items-center justify-center shrink-0 border border-brand-100" aria-hidden="true">
                            <i class="ph-fill ph-identification-card text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-sm font-semibold text-slate-800">Portofolio Digital</h2>
                            <p class="text-xs text-slate-600 mt-0.5 leading-snug">Rekam jejak prestasi tervalidasi siap cetak dan ekspor ke format PDF.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-2xl bg-emerald-50 text-emerald-800 flex items-center justify-center shrink-0 border border-emerald-100" aria-hidden="true">
                            <i class="ph-fill ph-users-three text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-sm font-semibold text-slate-800">Team Quest &amp; Skuad</h2>
                            <p class="text-xs text-slate-600 mt-0.5 leading-snug">Undang rekan tim lintas fakultas dengan NIM untuk kolaborasi misi.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-2xl bg-sky-50 text-sky-800 flex items-center justify-center shrink-0 border border-sky-100" aria-hidden="true">
                            <i class="ph-fill ph-seal-check text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-sm font-semibold text-slate-800">Validasi Verifikator</h2>
                            <p class="text-xs text-slate-600 mt-0.5 leading-snug">Panel evaluasi berkas pengajuan mahasiswa oleh verifikator kampus.</p>
                        </div>
                    </div>
                </div>

                <div class="p-4 rounded-3xl bg-brand-50/70 border border-brand-100 inline-flex flex-wrap items-center justify-center gap-4 mx-auto">
                    <div class="flex -space-x-2 shrink-0" aria-hidden="true">
                        <div class="w-9 h-9 rounded-full ring-2 ring-white bg-indigo-100 flex items-center justify-center text-xs font-bold text-brand-700">NY</div>
                        <div class="w-9 h-9 rounded-full ring-2 ring-white bg-purple-100 flex items-center justify-center text-xs font-bold text-purple-800">FA</div>
                        <div class="w-9 h-9 rounded-full ring-2 ring-white bg-emerald-100 flex items-center justify-center text-xs font-bold text-emerald-800">AC</div>
                        <div class="w-9 h-9 rounded-full ring-2 ring-white bg-amber-100 flex items-center justify-center text-xs font-bold text-amber-800">NA</div>
                    </div>
                    <div class="text-xs text-slate-700 text-left">
                        <span class="font-bold text-slate-900">{{ $studentCount ?? 6 }} Mahasiswa Kelompok 5</span> terdaftar di basis data dengan akumulasi <span class="font-semibold text-brand-600">{{ number_format($totalXp ?? 9820) }} XP</span> dan <span class="font-semibold text-emerald-800">{{ $approvedCount ?? 2 }} bukti misi disetujui</span>.
                    </div>
                </div>
            </div>

            <div class="w-full mx-auto max-w-5xl">
                <div class="bg-white rounded-3xl p-7 sm:p-9 border border-slate-100 soft-shadow relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-brand-600 via-purple-600 to-indigo-500"></div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                        <div class="flex flex-col justify-between h-full space-y-6">
                            <div>
                                <div class="mb-6 text-center sm:text-left">
                                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 text-brand-600 text-xs font-semibold mb-3 border border-brand-200">
                                        <i class="ph-fill ph-shield-check text-emerald-700 text-sm" aria-hidden="true"></i>
                                        <span>Single Sign-On Kampus</span>
                                    </div>
                                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">Selamat Datang! 👋</h2>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1">Pilih peran akses yang sesuai dengan akun institusi Telkom University Anda.</p>
                                </div>

                                <div class="p-1 rounded-full bg-slate-100 flex items-center mb-6 border border-slate-200/70" role="tablist" aria-label="Pilih Peran Pengguna">
                                    <button role="tab" aria-selected="true" class="flex-1 py-2.5 px-3 min-h-[44px] text-xs font-semibold rounded-full pill-active transition-all flex items-center justify-center gap-1.5" id="tab-mahasiswa" onclick="selectRole('mahasiswa')" type="button">
                                        <i class="ph-bold ph-student text-sm" aria-hidden="true"></i>
                                        <span>Mahasiswa</span>
                                    </button>
                                    <button role="tab" aria-selected="false" class="flex-1 py-2.5 px-3 min-h-[44px] text-xs font-semibold rounded-full pill-inactive transition-all flex items-center justify-center gap-1.5" id="tab-verifikator" onclick="selectRole('verifikator')" type="button">
                                        <i class="ph-bold ph-shield-check text-sm" aria-hidden="true"></i>
                                        <span>Admin / Verifikator</span>
                                    </button>
                                </div>

                                <div class="space-y-3">
                                    <button onclick="handleLoginSubmit(event)" class="w-full py-3.5 px-4 min-h-[44px] rounded-full bg-gradient-to-r from-brand-600 to-indigo-700 hover:from-brand-700 hover:to-indigo-800 text-white font-semibold text-sm shadow-md shadow-brand-600/25 transition-all flex items-center justify-center gap-2.5 group" type="button">
                                        <i class="ph-bold ph-buildings text-lg group-hover:scale-110 transition-transform" aria-hidden="true"></i>
                                        <span id="sso-label">Masuk dengan SSO Akun Kampus</span>
                                        <i class="ph-bold ph-arrow-right text-xs opacity-80 group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
                                    </button>
                                    <button onclick="fillDemo(); handleLoginSubmit(event);" class="w-full py-2.5 px-4 min-h-[44px] rounded-full bg-white hover:bg-slate-50 text-slate-700 font-medium text-xs border border-slate-200 transition-all flex items-center justify-center gap-2" type="button">
                                        <svg class="w-4 h-4" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"></path>
                                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"></path>
                                        </svg>
                                        <span>Email Resmi Kampus (@student.telkomuniversity.ac.id)</span>
                                    </button>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3 text-xs text-slate-600 bg-slate-50 p-3.5 rounded-2xl">
                                <div>
                                    <span class="font-semibold text-slate-800">Akun Demo Kelompok 5:</span>
                                    <p class="text-slate-600 mt-0.5" id="demo-account-hint">Mahasiswa: 103032400035 (Fathur) / password123</p>
                                </div>
                                <button class="px-3.5 py-2 min-h-[40px] rounded-full bg-brand-50 hover:bg-brand-100 text-brand-600 font-semibold border border-brand-200 transition-colors shrink-0" onclick="fillDemo()" type="button">
                                    Isi Otomatis
                                </button>
                            </div>
                        </div>

                        <div class="lg:border-l lg:border-slate-100 lg:pl-10 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center gap-2 mb-5">
                                    <div class="w-2 h-2 rounded-full bg-brand-600"></div>
                                    <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">Kredensial Akun Manual</span>
                                </div>

                                <div id="loginErrorAlert" role="alert" class="hidden mb-4 p-3 rounded-2xl bg-red-50 border border-red-200 text-red-800 text-xs font-medium">
                                    Mohon lengkapi NIM/NIP dan kata sandi terlebih dahulu.
                                </div>

                                <form class="space-y-4" id="manualLoginForm" onsubmit="handleLoginSubmit(event)">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1.5" for="user-id" id="input-label-id">
                                            Nomor Induk Mahasiswa (NIM)
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-600">
                                                <i class="ph-bold ph-identification-card text-base" id="input-icon-id" aria-hidden="true"></i>
                                            </div>
                                            <input class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-sm placeholder:text-slate-500 focus:border-brand-600 focus:bg-white focus:ring-4 focus:ring-brand-600/10 transition-all font-medium" id="user-id" name="user-id" placeholder="Contoh: 103032400035" required type="text" value="103032400035">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between mb-1.5">
                                            <label class="block text-xs font-semibold text-slate-700" for="password">
                                                Kata Sandi
                                            </label>
                                            <button type="button" onclick="openInfoModal('Reset Kata Sandi SSO', 'Untuk mengatur ulang kata sandi akun mahasiswa atau verifikator, silakan gunakan layanan Helpdesk Direktorat Pusat Teknologi Informasi (PuTI) Telkom University atau klik Isi Otomatis untuk menggunakan akun demo.')" class="text-xs text-brand-600 hover:underline font-medium">
                                                Lupa sandi?
                                            </button>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-600">
                                                <i class="ph-bold ph-lock-key text-base" aria-hidden="true"></i>
                                            </div>
                                            <input class="w-full pl-10 pr-11 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-sm placeholder:text-slate-500 focus:border-brand-600 focus:bg-white focus:ring-4 focus:ring-brand-600/10 transition-all font-medium" id="password" name="password" placeholder="••••••••••••" required type="password" value="password123">
                                            <button aria-label="Tampilkan atau sembunyikan kata sandi" class="absolute inset-y-0 right-0 pr-3.5 min-w-[44px] flex items-center justify-center text-slate-600 hover:text-slate-800" onclick="togglePassword()" type="button">
                                                <i class="ph-bold ph-eye text-base" id="eye-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-1">
                                        <label class="flex items-center gap-2 cursor-pointer text-xs text-slate-600 select-none" for="remember-device">
                                            <input checked id="remember-device" class="w-4 h-4 rounded text-brand-600 border-slate-300 focus:ring-brand-600" type="checkbox">
                                            <span>Ingat perangkat ini selama 30 hari</span>
                                        </label>
                                    </div>
                                    <button id="loginSubmitBtn" class="w-full py-3 px-4 min-h-[44px] rounded-full bg-slate-900 hover:bg-slate-800 text-white font-semibold text-sm transition-all shadow-sm flex items-center justify-center gap-2 mt-2" type="submit">
                                        <i class="ph-bold ph-sign-in text-base" aria-hidden="true"></i>
                                        <span id="btn-submit-text">Masuk ke Portal CampusQuest</span>
                                    </button>
                                </form>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-100 text-center">
                                <p class="text-xs text-slate-600">
                                    Ingin melihat daftar akun mahasiswa Kelompok 5?
                                    <button type="button" onclick="openInfoModal('Daftar Akun Mahasiswa Kelompok 5', '1. Nathasya Yuan Maharani (103032400001) - Epic 2 Gamifikasi\n2. Fathurrahman Alfarizi (103032400035) - Epic 6 Portofolio\n3. Anggita Cahyati Hidayat (103032400041) - Epic 5 Team Quest\n4. Nayla Assyifa (103032400078) - Epic 1 Pengajuan & Validasi\n5. Naira Cahaya Putri D. S. (103032400100) - Epic 4 Katalog Quest\n6. Nur Syadira (103032400123) - Epic 3 Leaderboard\n\nAdmin Kemahasiswaan: NIP-99001')" class="font-semibold text-brand-600 hover:underline">
                                        Lihat Daftar NIM Kelompok 5
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center flex items-center justify-center gap-2 text-slate-600 text-xs">
                    <i class="ph-fill ph-lock-simple text-emerald-700" aria-hidden="true"></i>
                    <span>Koneksi sesi terproteksi CSRF Token &amp; autentikasi peran kampus</span>
                </div>
            </div>
        </div>
    </main>

    <footer class="w-full px-6 py-6 border-t border-slate-100 bg-white/80 text-xs text-slate-600">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3">
            <p>© 2026 CampusQuest | Dikembangkan oleh Tim Kelompok 5 (Nayla, Nathasya, Syadira, Naira, Anggita, Fathur).</p>
            <div class="flex flex-wrap items-center gap-4 text-slate-600">
                <a class="hover:text-brand-600 transition-colors" href="{{ route('missions.index') }}">Katalog Quest</a>
                <span aria-hidden="true">•</span>
                <a class="hover:text-brand-600 transition-colors" href="{{ route('leaderboard') }}">Leaderboard</a>
                <span aria-hidden="true">•</span>
                <a class="hover:text-brand-600 transition-colors" href="{{ route('portfolio.index') }}">Portofolio Digital</a>
            </div>
        </div>
    </footer>

    <div id="infoModal" role="dialog" aria-modal="true" aria-labelledby="infoModalTitle" class="fixed inset-0 bg-slate-900/50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-xl space-y-4">
            <div class="flex items-center justify-between">
                <h3 id="infoModalTitle" class="text-base font-bold text-slate-900">Informasi CampusQuest</h3>
                <button type="button" onclick="closeInfoModal()" aria-label="Tutup Dialog" class="w-9 h-9 rounded-full hover:bg-slate-100 flex items-center justify-center text-slate-600">
                    <i class="ph-bold ph-x text-base" aria-hidden="true"></i>
                </button>
            </div>
            <p id="infoModalBody" class="text-xs text-slate-600 whitespace-pre-line leading-relaxed"></p>
            <div class="flex justify-end pt-2">
                <button type="button" onclick="closeInfoModal()" class="px-5 py-2 min-h-[40px] rounded-full bg-brand-600 text-white text-xs font-semibold hover:bg-brand-700 transition-colors">
                    Mengerti
                </button>
            </div>
        </div>
    </div>

    <script>
        let currentRole = 'mahasiswa';

        function selectRole(role) {
            currentRole = role;
            const tabMahasiswa = document.getElementById('tab-mahasiswa');
            const tabVerifikator = document.getElementById('tab-verifikator');
            const inputLabelId = document.getElementById('input-label-id');
            const inputUserId = document.getElementById('user-id');
            const inputIconId = document.getElementById('input-icon-id');
            const ssoLabel = document.getElementById('sso-label');
            const btnSubmit = document.getElementById('btn-submit-text');
            const demoHint = document.getElementById('demo-account-hint');

            if (role === 'mahasiswa') {
                tabMahasiswa.className = 'flex-1 py-2.5 px-3 min-h-[44px] text-xs font-semibold rounded-full pill-active transition-all flex items-center justify-center gap-1.5';
                tabMahasiswa.setAttribute('aria-selected', 'true');
                tabVerifikator.className = 'flex-1 py-2.5 px-3 min-h-[44px] text-xs font-semibold rounded-full pill-inactive transition-all flex items-center justify-center gap-1.5';
                tabVerifikator.setAttribute('aria-selected', 'false');

                inputLabelId.innerText = 'Nomor Induk Mahasiswa (NIM)';
                inputUserId.placeholder = 'Contoh: 103032400035';
                inputUserId.value = '103032400035';
                inputIconId.className = 'ph-bold ph-identification-card text-base';
                ssoLabel.innerText = 'Masuk dengan SSO Akun Kampus';
                btnSubmit.innerText = 'Masuk ke Portal Mahasiswa';
                demoHint.innerText = 'Mahasiswa: 103032400035 (Fathur) / password123';
            } else {
                tabVerifikator.className = 'flex-1 py-2.5 px-3 min-h-[44px] text-xs font-semibold rounded-full pill-active transition-all flex items-center justify-center gap-1.5';
                tabVerifikator.setAttribute('aria-selected', 'true');
                tabMahasiswa.className = 'flex-1 py-2.5 px-3 min-h-[44px] text-xs font-semibold rounded-full pill-inactive transition-all flex items-center justify-center gap-1.5';
                tabMahasiswa.setAttribute('aria-selected', 'false');

                inputLabelId.innerText = 'Nomor Induk Pegawai (NIP / Kode Verifikator)';
                inputUserId.placeholder = 'Contoh: NIP-99001';
                inputUserId.value = 'NIP-99001';
                inputIconId.className = 'ph-bold ph-shield-check text-base';
                ssoLabel.innerText = 'Masuk dengan SSO Kemahasiswaan';
                btnSubmit.innerText = 'Masuk ke Dashboard Verifikator';
                demoHint.innerText = 'Admin: NIP-99001 / password123';
            }
        }

        function togglePassword() {
            const pwdInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                eyeIcon.className = 'ph-bold ph-eye-slash text-base';
            } else {
                pwdInput.type = 'password';
                eyeIcon.className = 'ph-bold ph-eye text-base';
            }
        }

        function fillDemo() {
            const inputUserId = document.getElementById('user-id');
            const pwdInput = document.getElementById('password');
            if (currentRole === 'mahasiswa') {
                inputUserId.value = '103032400035';
                pwdInput.value = 'password123';
            } else {
                inputUserId.value = 'NIP-99001';
                pwdInput.value = 'password123';
            }
        }

        function handleLoginSubmit(e) {
            if (e) e.preventDefault();
            const inputUserId = document.getElementById('user-id');
            const pwdInput = document.getElementById('password');
            const errorBox = document.getElementById('loginErrorAlert');
            const submitBtn = document.getElementById('loginSubmitBtn');

            if (!inputUserId.value.trim() || !pwdInput.value.trim()) {
                errorBox.classList.remove('hidden');
                return;
            }
            errorBox.classList.add('hidden');

            if (submitBtn) {
                submitBtn.disabled = true;
                document.getElementById('btn-submit-text').innerText = 'Memproses Sesi...';
            }

            if (currentRole === 'mahasiswa') {
                window.location.href = '{{ route("dashboard") }}';
            } else {
                window.location.href = '{{ route("admin.submissions") }}';
            }
        }

        function openInfoModal(title, body) {
            document.getElementById('infoModalTitle').innerText = title;
            document.getElementById('infoModalBody').innerText = body;
            document.getElementById('infoModal').classList.remove('hidden');
        }

        function closeInfoModal() {
            document.getElementById('infoModal').classList.add('hidden');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeInfoModal();
            }
        });
    </script>
</body>
</html>
