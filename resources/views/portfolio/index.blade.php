@extends('layouts.app')

@section('title', 'Portofolio Digital Prestasi — CampusQuest')

@section('content')
<!-- EPIC 6: Digital Achievement Portfolio (PIC: Fathurrahman Alfarizi - 103032400035) -->
<div class="flex flex-col w-full">
<!-- Toast Feedback Simulation -->
<div class="fixed bottom-8 right-8 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 px-5 py-3.5 bg-text-primary text-surface-card rounded-full shadow-xl font-label-md text-label-md" id="toastNotification">
<span class="material-symbols-outlined text-badge-emerald text-[20px]">check_circle</span>
<span id="toastMessage">Tautan portofolio disalin ke clipboard!</span>
</div>
<!-- Action Bar & Official Certification Header -->
<div class="w-full mb-8 flex flex-col xl:flex-row items-start xl:items-center justify-between gap-6">
<div class="space-y-1.5 max-w-2xl">
<div class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container rounded-full text-text-muted font-label-sm text-label-sm uppercase tracking-wider">
<span class="w-2 h-2 rounded-full bg-badge-emerald animate-pulse"></span>
        E-Transcript • Verifikasi Kampus Merdeka
      </div>
<h1 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">Portofolio Digital Prestasi</h1>
<p class="font-body-md text-body-md text-text-muted">Rekam jejak resmi aktivitas kampus yang telah divalidasi resmi oleh verifikator kampus dan dapat digunakan untuk pendaftaran magang nasional.</p>
</div>
<div class="flex flex-wrap items-center gap-3 w-full xl:w-auto justify-start xl:justify-end">
<!-- Status Badge -->
<div class="inline-flex items-center gap-2 px-4 py-2 bg-pastel-lavender-start rounded-full text-badge-emerald font-label-md text-label-md shadow-sm">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">verified_user</span>
<span class="font-bold text-on-surface">Valid Digital Signature</span>
</div>
<!-- Action Buttons -->
<button class="inline-flex items-center gap-2 px-5 py-2.5 bg-surface-card hover:bg-pastel-lavender-start text-text-primary rounded-full font-label-lg text-label-lg shadow-sm hover:shadow transition-all group" id="btnShareLink">
<span class="material-symbols-outlined text-[18px] text-primary group-hover:scale-110 transition-transform">share</span>
<span>Bagikan Tautan</span>
</button>
<button class="p-2.5 bg-surface-card hover:bg-pastel-lavender-start text-text-primary rounded-full shadow-sm hover:shadow transition-all group" id="btnCustomize" title="Kustomisasi Tampilan Cetak">
<span class="material-symbols-outlined text-[20px] text-on-surface-variant group-hover:rotate-45 transition-transform">tune</span>
</button>
<button class="inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-primary-container to-secondary text-surface-card rounded-full font-label-lg text-label-lg shadow-[0_4px_16px_rgba(108,92,231,0.28)] hover:shadow-[0_6px_20px_rgba(108,92,231,0.4)] hover:brightness-105 active:scale-95 transition-all" id="btnExportPdf">
<span class="material-symbols-outlined text-[19px]">download</span>
<span>Export to PDF</span>
</button>
</div>
</div>
<!-- Document Preview Container (Canvas / Paper view) -->
<div class="relative w-full max-w-5xl mx-auto">
<!-- Paper Sheet Shadow Backdrops -->
<div class="absolute inset-x-3 -top-2 h-full bg-pastel-lavender-start/60 rounded-[28px] -z-10 blur-sm"></div>
<div class="w-full bg-surface-card rounded-[24px] p-8 md:p-12 shadow-[0_12px_40px_-6px_rgba(108,92,231,0.08),0_4px_12px_-2px_rgba(0,0,0,0.02)] space-y-12">
<!-- Top Academic Header / Student Profile Card -->
<div class="relative flex flex-col md:flex-row items-start md:items-center justify-between gap-6 pb-8 bg-gradient-to-br from-pastel-lavender-start/50 via-transparent to-pastel-lavender-end/30 p-6 md:p-8 rounded-[20px]">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
<div class="relative group">
<img class="w-24 h-24 sm:w-28 sm:h-28 rounded-full object-cover shadow-md ring-4 ring-surface-card" data-alt="Professional studio portrait of an ambitious female Indonesian university student wearing an academic blazer against a soft warm cream minimalist background with subtle lavender rim lighting, highly confident and friendly expression." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWRFlPQWC2gFoXdRSiYh2vSz9K9hc9sH5ONqh-uW6PS1KiT3Fs5UnfjmsU3seKhk-Re8uKbnxSZM7YsDbxLCu0T_eujNABmq2WN9rmTxP2h67SrkzjvaMZ7_JPmY4bhDyGV-WrrF5vrzClA7w0ocAz6xf5TLCCnqvbCX8JRkhWyrHkvohq-tTYqEX6RaJvcQUyzJrMfsRUotLotcQ-Gwh67HSZpOXW9wPY8ciWQr4"/>
<div class="absolute bottom-1 right-1 w-7 h-7 bg-badge-emerald text-surface-card rounded-full flex items-center justify-center shadow" title="Akun Terverifikasi">
<span class="material-symbols-outlined text-[16px]">check</span>
</div>
</div>
<div class="space-y-1">
<div class="flex flex-wrap items-center gap-2">
<h2 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">Nabila Putri</h2>
<span class="px-2.5 py-0.5 bg-surface-card text-primary font-label-sm text-label-sm rounded-full shadow-sm">NIM: 2206123456</span>
</div>
<p class="font-body-lg text-body-lg text-text-muted">S1 Sistem Informasi • Universitas Terbuka Prestasi</p>
<div class="flex flex-wrap items-center gap-3 pt-2">
<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-card rounded-full font-label-md text-label-md text-text-primary shadow-sm">
<span class="material-symbols-outlined text-badge-gold text-[16px]" style="font-variation-settings: 'FILL' 1;">grade</span>
                IPK Akumulatif: <strong class="text-text-primary">3.84</strong> / 4.00
              </span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-card rounded-full font-label-md text-label-md text-text-primary shadow-sm">
<span class="material-symbols-outlined text-primary text-[16px]">military_tech</span>
                Level 3 Scholar • <strong>2,450 XP</strong>
</span>
</div>
</div>
</div>
<div class="flex flex-row md:flex-col items-start md:items-end gap-2 w-full md:w-auto pt-2 md:pt-0">
<a class="inline-flex items-center gap-2 px-3 py-1.5 bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-sm text-label-sm rounded-full shadow-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[15px] text-badge-sky">alternate_email</span>
            nabila.putri@mhs.ac.id
          </a>
<a class="inline-flex items-center gap-2 px-3 py-1.5 bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-sm text-label-sm rounded-full shadow-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[15px] text-badge-sky">link</span>
            linkedin.com/in/nabila-putri
          </a>
<div class="text-right hidden md:block mt-1">
<span class="text-[11px] font-label-sm text-text-muted uppercase tracking-wider">Terakhir Disinkronisasi</span>
<p class="font-label-sm text-label-sm text-text-primary">24 Oktober 2024 • 14:30 WIB</p>
</div>
</div>
</div>
<!-- Section 1: Ringkasan Kompetensi & Karir -->
<div class="space-y-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">psychology</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary">Ringkasan Kompetensi &amp; Karir</h3>
</div>
<span class="font-label-sm text-label-sm text-badge-emerald bg-surface-container px-2.5 py-1 rounded-full">Validated by Academic Advisor</span>
</div>
<div class="p-6 bg-surface-body rounded-[18px] text-on-surface space-y-3">
<p class="font-body-md text-body-md leading-relaxed text-on-surface">
            Mahasiswi Sistem Informasi tingkat tiga dengan fokus mendalam pada <strong>Analisis Rekayasa Kebutuhan Sistem</strong>, <strong>Project Management Berbasis Agile</strong>, dan <strong>Kepemimpinan Kolaboratif</strong>. Aktif memadukan pencapaian akademik berstandar tinggi dengan kontribusi nyata pada riset kecerdasan data kampus serta inisiatif komunitas mahasiswa.
          </p>
<div class="flex flex-wrap gap-2 pt-2">
<span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Product Discovery</span>
<span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Cloud Architecture Basics</span>
<span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">UI/UX Heuristic Review</span>
<span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Stakeholder Management</span>
<span class="px-3 py-1 bg-surface-card text-on-surface-variant font-label-md text-label-md rounded-full shadow-sm">Academic Research Writing</span>
</div>
</div>
</div>
<!-- Section 2: Riwayat Quest & Kegiatan Akademik Terverifikasi -->
<div class="space-y-6">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">verified</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary">Riwayat Quest &amp; Rekam Jejak Terverifikasi</h3>
</div>
<div class="flex items-center gap-2">
<span class="font-label-sm text-label-sm text-text-muted">Total 5 Artefak Legal</span>
<span class="inline-block w-1.5 h-1.5 rounded-full bg-primary"></span>
<span class="font-label-sm text-label-sm text-primary font-bold">1,800 SKS Point Equiv.</span>
</div>
</div>
<!-- Quest List (Independent White Card Tiles with Micro Elevation) -->
<div class="space-y-3.5">
<!-- Item 1: Riset -->
<div class="group p-5 bg-surface-body hover:bg-pastel-lavender-start/40 rounded-[18px] transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex items-start gap-4">
<div class="w-11 h-11 rounded-2xl bg-surface-card flex items-center justify-center text-primary shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">menu_book</span>
</div>
<div class="space-y-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2.5 py-0.5 bg-surface-card text-badge-sky font-label-sm text-label-sm rounded-full shadow-sm">Riset Akademik</span>
<span class="font-label-sm text-label-sm text-text-muted">SK No: 412/FTI/2024</span>
<span class="font-label-sm text-label-sm text-text-muted">• 18 Agu 2024</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-text-primary group-hover:text-primary transition-colors">
                  Publikasi Prosiding Konferensi Nasional Teknologi Informasi 2024
                </h4>
<p class="font-body-sm text-body-sm text-text-muted">Penulis Utama: Implementasi Algoritma NLP untuk Klasifikasi Aspirasi Mahasiswa Terbuka</p>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
<span class="inline-flex items-center gap-1 px-3 py-1 bg-surface-card text-primary font-label-md text-label-md rounded-full shadow-sm">
<span class="material-symbols-outlined text-[16px]">bolt</span> +450 XP
              </span>
<button class="p-2 hover:bg-surface-card text-on-surface-variant rounded-full transition-colors" title="Buka Dokumen SK">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</div>
<!-- Item 2: Kompetisi -->
<div class="group p-5 bg-surface-body hover:bg-pastel-lavender-start/40 rounded-[18px] transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex items-start gap-4">
<div class="w-11 h-11 rounded-2xl bg-surface-card flex items-center justify-center text-badge-gold shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
</div>
<div class="space-y-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2.5 py-0.5 bg-surface-card text-badge-gold font-label-sm text-label-sm rounded-full shadow-sm">Kompetisi</span>
<span class="font-label-sm text-label-sm text-text-muted">Sertifikat: HCK-99182</span>
<span class="font-label-sm text-label-sm text-text-muted">• 02 Jun 2024</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-text-primary group-hover:text-primary transition-colors">
                  Juara 2 Hackathon Inovasi Kampus Nasional
                </h4>
<p class="font-body-sm text-body-sm text-text-muted">Kategori Solusi Smart Campus • Perancangan platform IoT presensi nirsentuh</p>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
<span class="inline-flex items-center gap-1 px-3 py-1 bg-surface-card text-primary font-label-md text-label-md rounded-full shadow-sm">
<span class="material-symbols-outlined text-[16px]">bolt</span> +500 XP
              </span>
<button class="p-2 hover:bg-surface-card text-on-surface-variant rounded-full transition-colors" title="Buka Dokumen SK">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</div>
<!-- Item 3: Kepanitiaan -->
<div class="group p-5 bg-surface-body hover:bg-pastel-lavender-start/40 rounded-[18px] transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex items-start gap-4">
<div class="w-11 h-11 rounded-2xl bg-surface-card flex items-center justify-center text-primary-container shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">diversity_3</span>
</div>
<div class="space-y-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2.5 py-0.5 bg-surface-card text-badge-violet font-label-sm text-label-sm rounded-full shadow-sm">Kepanitiaan</span>
<span class="font-label-sm text-label-sm text-text-muted">SK No: 120/PAN-DS/2024</span>
<span class="font-label-sm text-label-sm text-text-muted">• 15 Mei 2024</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-text-primary group-hover:text-primary transition-colors">
                  Koordinator Acara Seminar Internasional Data Science
                </h4>
<p class="font-body-sm text-body-sm text-text-muted">Mengorkestrasi 40 panitia mahasiswa dengan partisipasi 650 peserta dari 4 negara</p>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
<span class="inline-flex items-center gap-1 px-3 py-1 bg-surface-card text-primary font-label-md text-label-md rounded-full shadow-sm">
<span class="material-symbols-outlined text-[16px]">bolt</span> +350 XP
              </span>
<button class="p-2 hover:bg-surface-card text-on-surface-variant rounded-full transition-colors" title="Buka Dokumen SK">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</div>
<!-- Item 4: Organisasi -->
<div class="group p-5 bg-surface-body hover:bg-pastel-lavender-start/40 rounded-[18px] transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex items-start gap-4">
<div class="w-11 h-11 rounded-2xl bg-surface-card flex items-center justify-center text-secondary shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">groups</span>
</div>
<div class="space-y-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2.5 py-0.5 bg-surface-card text-secondary font-label-sm text-label-sm rounded-full shadow-sm">Organisasi</span>
<span class="font-label-sm text-label-sm text-text-muted">SK Rektorat: 088/KM/2024</span>
<span class="font-label-sm text-label-sm text-text-muted">• Periode 2024/2025</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-text-primary group-hover:text-primary transition-colors">
                  Ketua Divisi Humas Himpunan Mahasiswa Sistem Informasi
                </h4>
<p class="font-body-sm text-body-sm text-text-muted">Memimpin kemitraan strategis dengan 12 industri teknologi terkemuka di Indonesia</p>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
<span class="inline-flex items-center gap-1 px-3 py-1 bg-surface-card text-primary font-label-md text-label-md rounded-full shadow-sm">
<span class="material-symbols-outlined text-[16px]">bolt</span> +300 XP
              </span>
<button class="p-2 hover:bg-surface-card text-on-surface-variant rounded-full transition-colors" title="Buka Dokumen SK">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</div>
<!-- Item 5: Sertifikasi -->
<div class="group p-5 bg-surface-body hover:bg-pastel-lavender-start/40 rounded-[18px] transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex items-start gap-4">
<div class="w-11 h-11 rounded-2xl bg-surface-card flex items-center justify-center text-badge-emerald shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">workspace_premium</span>
</div>
<div class="space-y-1">
<div class="flex flex-wrap items-center gap-2">
<span class="px-2.5 py-0.5 bg-surface-card text-badge-emerald font-label-sm text-label-sm rounded-full shadow-sm">Sertifikasi Internasional</span>
<span class="font-label-sm text-label-sm text-text-muted">Credential ID: CLD-7703</span>
<span class="font-label-sm text-label-sm text-text-muted">• 10 Mar 2024</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-text-primary group-hover:text-primary transition-colors">
                  Sertifikasi Internasional Cloud Computing Foundations
                </h4>
<p class="font-body-sm text-body-sm text-text-muted">Sertifikasi vendor global untuk arsitektur serverless dan keamanan data terenkripsi</p>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
<span class="inline-flex items-center gap-1 px-3 py-1 bg-surface-card text-primary font-label-md text-label-md rounded-full shadow-sm">
<span class="material-symbols-outlined text-[16px]">bolt</span> +200 XP
              </span>
<button class="p-2 hover:bg-surface-card text-on-surface-variant rounded-full transition-colors" title="Buka Dokumen SK">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</div>
</div>
</div>
<!-- Section 3: Verified Badges & Credential Showcase -->
<div class="space-y-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">award_star</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary">Verified Badges &amp; Credential Showcase</h3>
</div>
<span class="font-label-sm text-label-sm text-primary font-semibold">Tervalidasi Otomatis via Blockchain Vault</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<!-- Badge 1 -->
<div class="p-6 bg-gradient-to-br from-pastel-lavender-start/40 to-surface-card rounded-[20px] shadow-sm flex flex-col items-center text-center space-y-3 hover:translate-y-[-2px] transition-transform">
<div class="relative w-16 h-16 rounded-full bg-surface-card shadow-sm flex items-center justify-center text-primary ring-4 ring-pastel-lavender-start">
<span class="material-symbols-outlined text-[32px]">volunteer_activism</span>
<span class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-badge-emerald text-surface-card flex items-center justify-center text-[12px] font-bold shadow">
<span class="material-symbols-outlined text-[14px]">check</span>
</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-text-primary">Social Warrior</h4>
<p class="font-body-sm text-body-sm text-text-muted mt-1">Diberikan atas kontribusi pengabdian masyarakat dengan dampak lebih dari 100 jam partisipasi.</p>
</div>
<div class="pt-2 text-[11px] font-label-sm text-text-muted bg-surface-card px-3 py-1 rounded-full shadow-sm">
              Diperoleh: 12 April 2024
            </div>
</div>
<!-- Badge 2 -->
<div class="p-6 bg-gradient-to-br from-pastel-lavender-start/40 to-surface-card rounded-[20px] shadow-sm flex flex-col items-center text-center space-y-3 hover:translate-y-[-2px] transition-transform">
<div class="relative w-16 h-16 rounded-full bg-surface-card shadow-sm flex items-center justify-center text-badge-sky ring-4 ring-pastel-lavender-start">
<span class="material-symbols-outlined text-[32px]">lightbulb</span>
<span class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-badge-emerald text-surface-card flex items-center justify-center text-[12px] font-bold shadow">
<span class="material-symbols-outlined text-[14px]">check</span>
</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-text-primary">Tech Innovator</h4>
<p class="font-body-sm text-body-sm text-text-muted mt-1">Pengakuan atas terobosan produk berbasis riset mahasiswa yang diikutsertakan pada pameran nasional.</p>
</div>
<div class="pt-2 text-[11px] font-label-sm text-text-muted bg-surface-card px-3 py-1 rounded-full shadow-sm">
              Diperoleh: 2 Juni 2024
            </div>
</div>
<!-- Badge 3 -->
<div class="p-6 bg-gradient-to-br from-pastel-lavender-start/40 to-surface-card rounded-[20px] shadow-sm flex flex-col items-center text-center space-y-3 hover:translate-y-[-2px] transition-transform">
<div class="relative w-16 h-16 rounded-full bg-surface-card shadow-sm flex items-center justify-center text-badge-gold ring-4 ring-pastel-lavender-start">
<span class="material-symbols-outlined text-[32px]">leaderboard</span>
<span class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-badge-emerald text-surface-card flex items-center justify-center text-[12px] font-bold shadow">
<span class="material-symbols-outlined text-[14px]">check</span>
</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-text-primary">Outstanding Leader</h4>
<p class="font-body-sm text-body-sm text-text-muted mt-1">Dianugerahkan kepada ketua program kerja dengan tingkat kepuasan delegasi di atas 95%.</p>
</div>
<div class="pt-2 text-[11px] font-label-sm text-text-muted bg-surface-card px-3 py-1 rounded-full shadow-sm">
              Diperoleh: 18 Mei 2024
            </div>
</div>
</div>
</div>
<!-- Section 4: Validasi & Tanda Tangan Digital Kampus -->
<div class="pt-8 bg-surface-body p-6 md:p-8 rounded-[20px] flex flex-col md:flex-row items-center justify-between gap-8">
<!-- Verification QR & Info -->
<div class="flex items-center gap-6">
<div class="w-24 h-24 bg-surface-card p-2 rounded-2xl shadow-sm flex flex-col items-center justify-center flex-shrink-0">
<!-- Simulated QR Visual -->
<svg class="w-full h-full text-text-primary" fill="currentColor" viewbox="0 0 100 100">
<path d="M10 10h30v30h-30zM16 16v18h18v-18zM22 22h6v6h-6zM60 10h30v30h-30zM66 16v18h18v-18zM72 22h6v6h-6zM10 60h30v30h-30zM16 66v18h18v-18zM22 72h6v6h-6zM60 60h10v10h-10zM80 60h10v10h-10zM70 70h10v10h-10zM60 80h10v10h-10zM80 80h10v10h-10zM45 15h10v10h-10zM45 35h10v10h-10zM45 60h10v10h-10zM15 45h10v10h-10zM35 45h10v10h-10z"></path>
</svg>
</div>
<div class="space-y-1">
<span class="inline-flex items-center gap-1.5 font-label-sm text-label-sm text-badge-emerald font-bold uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">verified</span>
              Digital Signature Valid • SHA-256
            </span>
<p class="font-label-md text-label-md text-text-primary">Direktorat Kemahasiswaan &amp; Alumni</p>
<p class="font-body-sm text-body-sm text-text-muted">Hash Dokumen: 8f9a2b0c1e4d77299a4e8d3cb1e0fa3b4</p>
<p class="font-body-sm text-body-sm text-text-muted">Dicetak pada: 24 Oktober 2024, 14:30:19 WIB</p>
</div>
</div>
<!-- Official Seal / Stempel Digital -->
<div class="flex items-center gap-4">
<div class="relative w-28 h-28 rounded-full bg-pastel-lavender-start flex items-center justify-center text-primary-container shadow-inner">
<!-- Concentric Circular Academic Seal Motif -->
<div class="absolute inset-1 rounded-full bg-surface-card flex items-center justify-center">
<div class="w-20 h-20 rounded-full bg-pastel-lavender-start/50 flex flex-col items-center justify-center text-center p-2">
<span class="material-symbols-outlined text-[24px] text-primary">school</span>
<span class="text-[7px] font-label-sm font-bold uppercase tracking-tighter text-primary mt-0.5">TERVERIFIKASI RESMI</span>
<span class="text-[6px] font-label-sm text-text-muted leading-tight">DIKTI • KEMENDIKBUD</span>
</div>
</div>
</div>
<div class="text-left space-y-1">
<p class="font-label-md text-label-md text-text-primary font-bold">Prof. Dr. Ir. Hendra Wijaya, M.Kom.</p>
<p class="font-body-sm text-body-sm text-text-muted">Wakil Rektor Bidang Akademik &amp; Kemahasiswaan</p>
<span class="inline-block px-2.5 py-0.5 bg-surface-card text-on-surface-variant font-label-sm text-label-sm rounded-full shadow-sm">
              NIP. 197805122003121002
            </span>
</div>
</div>
</div>
<!-- Watermark / Footer Legal Disclaimer -->
<div class="pt-4 flex flex-col sm:flex-row items-center justify-between text-text-muted font-body-sm text-body-sm gap-2">
<span>Dokumen ini merupakan transkrip elektronik sah yang dihasilkan oleh sistem CampusQuest.</span>
<span class="font-label-md text-label-md text-primary font-medium">Halaman 1 dari 1 • E-Transcript ID: CQ-2024-88421</span>
</div>
</div>
</div>
<!-- Interactive Scripts for Simulation -->
<script>
    (function() {
      const toast = document.getElementById('toastNotification');
      const toastMsg = document.getElementById('toastMessage');
      const btnShare = document.getElementById('btnShareLink');
      const btnExport = document.getElementById('btnExportPdf');
      const btnCustomize = document.getElementById('btnCustomize');

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
          navigator.clipboard ? navigator.clipboard.writeText(window.location.href) : null;
          showToast('Tautan portofolio resmi Nabila Putri telah disalin!');
        });
      }

      if (btnExport) {
        btnExport.addEventListener('click', function() {
          showToast('Menyiapkan file PDF resmi... Mengunduh otomatis.');
          setTimeout(() => {
            window.print();
          }, 800);
        });
      }

      if (btnCustomize) {
        btnCustomize.addEventListener('click', function() {
          showToast('Panel pengaturan tampilan cetak dibuka.');
        });
      }
    })();
  </script>
</div>
@endsection
