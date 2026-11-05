<!DOCTYPE html><html lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Masuk ke CampusQuest — SSO Kampus Terpadu</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Phosphor Icons -->
<script src="https://unpkg.com/@phosphor-icons/web"></script><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/regular/style.css"><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/thin/style.css"><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/light/style.css"><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/bold/style.css"><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/fill/style.css"><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/duotone/style.css">
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
              600: '#5849d6',
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
    }
    function handleLoginSubmit(e) {
      if (e) e.preventDefault();
      if (currentRole === 'mahasiswa') {
        window.location.href = '/dashboard';
      } else {
        window.location.href = '/admin/submissions';
      }
    }
    document.addEventListener('DOMContentLoaded', function() {
      const forms = document.querySelectorAll('form');
      forms.forEach(f => f.addEventListener('submit', handleLoginSubmit));
      const ssoBtn = document.getElementById('sso-label')?.closest('button');
      if (ssoBtn) ssoBtn.addEventListener('click', handleLoginSubmit);
    });
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
      background: #6c5ce7;
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(108, 92, 231, 0.25);
    }
    .pill-inactive {
      background: #f1f3f5;
      color: #64748b;
    }
  </style>
</head>
<body class="min-h-[1024px] bg-[#f8fafb] flex flex-col justify-between selection:bg-brand-100 selection:text-brand-700" data-stitch-vh="min-h-[1024px]===min-h-screen">
<!-- Top Simple Navigation Bar -->
<header class="w-full px-6 lg:px-12 py-5 flex items-center justify-between border-b border-slate-100 bg-white/70 backdrop-blur-md sticky top-0 z-30">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-2xl bg-brand-500 text-white flex items-center justify-center font-bold text-xl shadow-md shadow-brand-500/20">
<i class="ph-bold ph-compass"></i>
</div>
<div>
<div class="font-bold text-lg text-slate-800 tracking-tight flex items-center gap-2">
          CampusQuest
          <span class="text-[10px] font-semibold tracking-wider uppercase px-2 py-0.5 rounded-full bg-brand-50 text-brand-600 border border-brand-200">v2.4 Kampus Merdeka</span>
</div>
<p class="text-xs text-slate-400">Portal Gamifikasi &amp; Portofolio Mahasiswa</p>
</div>
</div>
<!-- Quick Help & Campus Badge -->
<div class="flex items-center gap-4 text-xs font-medium text-slate-500">
<div class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100/80 text-slate-600 border border-slate-200/60">
<i class="ph-fill ph-shield-check text-emerald-500 text-sm"></i>
<span class="">SSO Terintegrasi SIAKAD &amp; Kemendikbudristek</span>
</div>
<a class="flex items-center gap-1.5 text-slate-500 hover:text-brand-600 transition-colors py-1 px-2.5 rounded-lg hover:bg-brand-50" href="#help">
<i class="ph-bold ph-question text-base"></i>
<span class="">Pusat Bantuan</span>
</a>
</div>
</header>
<!-- Main Content Layout (Split 2-Column: Left Brand/Gamification Showcase, Right Login Card) -->
<main class="flex-1 max-w-7xl w-full mx-auto px-6 py-8 lg:py-12 flex items-center">
<div class="w-full flex flex-col items-center gap-10 lg:gap-12">
<!-- TOP SECTION: Gamification Value & Experience Showcase (Centered & Elegant) -->
<div class="w-full max-w-5xl mx-auto flex flex-col items-center text-center space-y-6">
<div class="space-y-4 flex flex-col items-center max-w-3xl mx-auto">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-brand-600 text-xs font-semibold">
<i class="ph-fill ph-sparkle text-brand-500"></i>
<span class="">Transformasi Pencapaian Akademik Menjadi Level &amp; XP</span>
</div>
<h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-[1.2]">
            Satu Pintu Menuju Petualangan Kampus &amp; Portofolio Kredibel.
          </h1>
<p class="text-slate-500 text-base leading-relaxed max-w-2xl mx-auto">
            Masuk dengan akun kampus terverifikasi untuk menjelajahi Quest kejuaraan, claim XP resmi BAAK, berkolaborasi dalam tim, dan bangun resume siap kerja secara otomatis.
          </p>
</div>
<!-- Interactive Gamification Feature Highlights Cards (4-column grid layout) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full pt-2 text-left">
<!-- Feature Card 1 -->
<div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
<div class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 border border-amber-100">
<i class="ph-fill ph-trophy text-xl"></i>
</div>
<div>
<h2 class="text-sm font-semibold text-slate-800">Klaim XP &amp; Leveling</h2>
<p class="text-xs text-slate-500 mt-0.5 leading-snug">Sertifikat terverifikasi BAAK otomatis menaikkan level mahasiswa.</p>
</div>
</div>
<!-- Feature Card 2 -->
<div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
<div class="w-10 h-10 rounded-2xl bg-indigo-50 text-brand-600 flex items-center justify-center shrink-0 border border-brand-100">
<i class="ph-fill ph-identification-card text-xl"></i>
</div>
<div>
<h2 class="text-sm font-semibold text-slate-800">Portofolio E-Transcript</h2>
<p class="text-xs text-slate-500 mt-0.5 leading-snug">Generate CV &amp; sertifikat digital tervalidasi siap ekspor PDF.</p>
</div>
</div>
<!-- Feature Card 3 -->
<div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
<div class="w-10 h-10 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
<i class="ph-fill ph-users-three text-xl"></i>
</div>
<div>
<h2 class="text-sm font-semibold text-slate-800">Team Quest &amp; Skuad</h2>
<p class="text-xs text-slate-500 mt-0.5 leading-snug">Undang rekan tim lintas prodi dengan NIM untuk kompetisi.</p>
</div>
</div>
<!-- Feature Card 4 -->
<div class="p-4 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex items-start gap-3.5">
<div class="w-10 h-10 rounded-2xl bg-sky-50 text-sky-600 flex items-center justify-center shrink-0 border border-sky-100">
<i class="ph-fill ph-seal-check text-xl"></i>
</div>
<div>
<h2 class="text-sm font-semibold text-slate-800">Admin Verifikasi Cepat</h2>
<p class="text-xs text-slate-500 mt-0.5 leading-snug">Dashboard terpadu BAAK untuk review berkas 1×24 jam.</p>
</div>
</div>
</div>
<!-- Testimonial / Social Proof Snippet -->
<div class="p-4 rounded-3xl bg-brand-50/70 border border-brand-100/80 inline-flex items-center gap-4 mx-auto">
<div class="flex -space-x-2 shrink-0">
<div class="w-9 h-9 rounded-full ring-2 ring-white bg-slate-200 overflow-hidden flex items-center justify-center text-xs font-bold text-slate-600">NP</div>
<div class="w-9 h-9 rounded-full ring-2 ring-white bg-purple-200 overflow-hidden flex items-center justify-center text-xs font-bold text-purple-700">RF</div>
<div class="w-9 h-9 rounded-full ring-2 ring-white bg-emerald-200 overflow-hidden flex items-center justify-center text-xs font-bold text-emerald-700">AS</div>
</div>
<div class="text-xs text-slate-600 text-left">
<span class="font-bold text-slate-800">3,450+ Mahasiswa</span> telah mengumpulkan lebih dari <span class="font-semibold text-brand-600">128,000 XP</span> semester ini.
          </div>
</div>
</div>
<!-- BOTTOM SECTION: Authentication & SSO Form Card (Centered max-w-xl) -->
<div class="w-full mx-auto max-w-5xl">
<div class="bg-white rounded-3xl p-7 sm:p-9 border border-slate-100 soft-shadow relative overflow-hidden"><!-- Subtle Top Accent Gradient -->
<div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-brand-500 via-purple-500 to-indigo-400"></div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
  <!-- Left Column: Header, Role Switcher, & SSO Options -->
  <div class="flex flex-col justify-between h-full space-y-6">
    <div>
      <!-- Header Form -->
      <div class="mb-6 text-center sm:text-left">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 text-brand-600 text-xs font-semibold mb-3 border border-brand-200">
          <i class="ph-fill ph-shield-check text-emerald-500 text-sm"></i>
          <span class="">Single Sign-On Terverifikasi</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">Selamat Datang! 👋</h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-1">Pilih metode autentikasi yang sesuai dengan akun institusi kampus Anda.</p>
      </div>

      <!-- Role Switcher Segmented Control (Pill Design) -->
      <div class="p-1 rounded-full bg-slate-100 flex items-center mb-6 border border-slate-200/50" role="tablist">
        <button class="flex-1 py-2 px-3 text-xs font-semibold rounded-full pill-active transition-all flex items-center justify-center gap-1.5" id="tab-mahasiswa" onclick="selectRole('mahasiswa')" type="button">
          <i class="ph-bold ph-student text-sm"></i>
          <span class="">Mahasiswa</span>
        </button>
        <button class="flex-1 py-2 px-3 text-xs font-semibold rounded-full pill-inactive transition-all flex items-center justify-center gap-1.5" id="tab-verifikator" onclick="selectRole('verifikator')" type="button">
          <i class="ph-bold ph-shield-check text-sm"></i>
          <span class="">Admin / Verifikator</span>
        </button>
      </div>

      <!-- Primary SSO Action: Single Sign-On Kampus (Recommended) -->
      <div class="space-y-3">
        <button class="w-full py-3.5 px-4 rounded-full bg-gradient-to-r from-brand-500 to-indigo-600 hover:from-brand-600 hover:to-indigo-700 text-white font-semibold text-sm shadow-md shadow-brand-500/25 transition-all flex items-center justify-center gap-2.5 group" type="button">
          <i class="ph-bold ph-buildings text-lg group-hover:scale-110 transition-transform"></i>
          <span id="sso-label" class="">Masuk dengan SSO Akun Kampus</span>
          <i class="ph-bold ph-arrow-right text-xs opacity-80 group-hover:translate-x-1 transition-transform"></i>
        </button>
        <button class="w-full py-2.5 px-4 rounded-full bg-white hover:bg-slate-50 text-slate-700 font-medium text-xs border border-slate-200 transition-all flex items-center justify-center gap-2" type="button">
          <svg class="w-4 h-4" viewBox="0 0 24 24">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"></path>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"></path>
          </svg>
          <span class="">Email Resmi Kampus (@mahasiswa.ac.id)</span>
        </button>
      </div>
    </div>

    <!-- Quick Demo Credentials Box for Testing / Evaluation -->
    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 bg-slate-50/80 p-3.5 rounded-2xl">
      <div>
        <span class="font-semibold text-slate-700">Akun Demo Cepat:</span>
        <p class="text-slate-500 mt-0.5" id="demo-account-hint">Mahasiswa: 2110512044 / campusquest25</p>
      </div>
      <button class="px-3 py-1 rounded-full bg-brand-50 hover:bg-brand-100 text-brand-600 font-semibold border border-brand-200 transition-colors" onclick="fillDemo()" type="button">
        Isi Otomatis
      </button>
    </div>
  </div>

  <!-- Right Column: Manual Credentials Form -->
  <div class="lg:border-l lg:border-slate-100 lg:pl-10 flex flex-col justify-between h-full">
    <div>
      <div class="flex items-center gap-2 mb-5">
        <div class="w-2 h-2 rounded-full bg-brand-500"></div>
        <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">Kredensial Akun Manual</span>
      </div>

      <form class="space-y-4" onsubmit="event.preventDefault();">
        <div>
          <label class="block text-xs font-semibold text-slate-700 mb-1.5" for="user-id" id="input-label-id">
            Nomor Induk Mahasiswa (NIM)
          </label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
              <i class="ph-bold ph-identification-card text-base" id="input-icon-id"></i>
            </div>
            <input class="w-full pl-10 pr-4 py-2.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-800 text-sm placeholder:text-slate-400 focus:outline-none focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10 transition-all font-medium" id="user-id" name="user-id" placeholder="Contoh: 2110512044" required="" type="text">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between mb-1.5">
            <label class="block text-xs font-semibold text-slate-700" for="password">
              Kata Sandi
            </label>
            <a class="text-xs text-brand-600 hover:underline font-medium" href="#forgot">Lupa sandi?</a>
          </div>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
              <i class="ph-bold ph-lock-key text-base"></i>
            </div>
            <input class="w-full pl-10 pr-10 py-2.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-800 text-sm placeholder:text-slate-400 focus:outline-none focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10 transition-all font-medium" id="password" name="password" placeholder="••••••••••••" required="" type="password">
            <button class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600" onclick="togglePassword()" type="button">
              <i class="ph-bold ph-eye text-base" id="eye-icon"></i>
            </button>
          </div>
        </div>
        <!-- Remember Me & Term -->
        <div class="flex items-center justify-between pt-1">
          <label class="flex items-center gap-2 cursor-pointer text-xs text-slate-600 select-none">
            <input checked="" class="w-4 h-4 rounded text-brand-500 border-slate-300 focus:ring-brand-500 rounded-lg" type="checkbox">
            <span class="">Ingat perangkat ini selama 30 hari</span>
          </label>
        </div>
        <!-- Submit Button -->
        <button class="w-full py-3 px-4 rounded-full bg-slate-900 hover:bg-slate-800 text-white font-semibold text-sm transition-all shadow-sm flex items-center justify-center gap-2 mt-2" type="submit">
          <i class="ph-bold ph-sign-in text-base"></i>
          <span id="btn-submit-text" class="">Masuk ke Portal CampusQuest</span>
        </button>
      </form>
    </div>

    <!-- Registration Link -->
    <div class="mt-6 pt-4 border-t border-slate-100 text-center">
      <p class="text-xs text-slate-500">
        Belum terdaftar di SIAKAD? 
        <a class="font-semibold text-brand-600 hover:underline" href="#register">Aktivasi Akun Mahasiswa Baru</a>
      </p>
    </div>
  </div>
</div></div>
<!-- Security footer seal -->
<div class="mt-4 text-center flex items-center justify-center gap-2 text-slate-400 text-xs">
<i class="ph-fill ph-lock-simple text-emerald-500"></i>
<span class="">Enkripsi TLS 256-bit standar Puspresnas &amp; BAAK</span>
</div>
</div>
</div>
</main>
<!-- Bottom Global Footer -->
<footer class="w-full px-6 py-6 border-t border-slate-100 bg-white/50 text-xs text-slate-400">
<div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3">
<p class="">© 2025 CampusQuest — Dikembangkan oleh Tim Kelompok 5 (Nayla, Nathasya, Syadira, Naira, Anggita, Fathur).</p>
<div class="flex items-center gap-4 text-slate-500">
<a class="hover:text-brand-600 transition-colors" href="#">Panduan SIAKAD</a>
<span class="">•</span>
<a class="hover:text-brand-600 transition-colors" href="#">Kebijakan Privasi</a>
<span class="">•</span>
<a class="hover:text-brand-600 transition-colors" href="#">Kontak BAAK</a>
</div>
</div>
</footer>
<!-- Role Switching & Interactive Script -->
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
        tabMahasiswa.className = 'flex-1 py-2 px-3 text-xs font-semibold rounded-full pill-active transition-all flex items-center justify-center gap-1.5';
        tabVerifikator.className = 'flex-1 py-2 px-3 text-xs font-semibold rounded-full pill-inactive transition-all flex items-center justify-center gap-1.5';
        
        inputLabelId.innerText = 'Nomor Induk Mahasiswa (NIM)';
        inputUserId.placeholder = 'Contoh: 2110512044';
        inputIconId.className = 'ph-bold ph-identification-card text-base';
        ssoLabel.innerText = 'Masuk dengan SSO Akun Kampus';
        btnSubmit.innerText = 'Masuk ke Portal Mahasiswa';
        demoHint.innerText = 'Mahasiswa: 2110512044 / campusquest25';
      } else {
        tabVerifikator.className = 'flex-1 py-2 px-3 text-xs font-semibold rounded-full pill-active transition-all flex items-center justify-center gap-1.5';
        tabMahasiswa.className = 'flex-1 py-2 px-3 text-xs font-semibold rounded-full pill-inactive transition-all flex items-center justify-center gap-1.5';
        
        inputLabelId.innerText = 'Nomor Induk Pegawai (NIP / Kode Verifikator)';
        inputUserId.placeholder = 'Contoh: 198503152010121002';
        inputIconId.className = 'ph-bold ph-shield-check text-base';
        ssoLabel.innerText = 'Masuk dengan SSO BAAK & Dosen';
        btnSubmit.innerText = 'Masuk ke Dashboard Verifikator';
        demoHint.innerText = 'Admin: 198503152010121002 / baak2025';
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
        inputUserId.value = '2110512044';
        pwdInput.value = 'campusquest25';
      } else {
        inputUserId.value = '198503152010121002';
        pwdInput.value = 'baak2025';
      }
    }
    function handleLoginSubmit(e) {
      if (e) e.preventDefault();
      if (currentRole === 'mahasiswa') {
        window.location.href = '/dashboard';
      } else {
        window.location.href = '/admin/submissions';
      }
    }
    document.addEventListener('DOMContentLoaded', function() {
      const forms = document.querySelectorAll('form');
      forms.forEach(f => f.addEventListener('submit', handleLoginSubmit));
      const ssoBtn = document.getElementById('sso-label')?.closest('button');
      if (ssoBtn) ssoBtn.addEventListener('click', handleLoginSubmit);
    });
  </script>






</body></html>