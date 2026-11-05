@extends('layouts.app')

@section('title', 'Manajemen Tim & Kolaborasi — CampusQuest')

@section('content')
<!-- EPIC 5: Team Quest / Kolaborasi (PIC: Anggita Cahyati Hidayat - 103032400041) -->
<div class="flex flex-col w-full">
<!-- Interactive Modals / Toasts Root Container -->
<div class="fixed bottom-8 right-8 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toast-notification">
<div class="flex items-center gap-3 px-5 py-3.5 bg-surface-card rounded-full shadow-[0_12px_32px_-4px_rgba(108,92,231,0.18)]">
<div class="w-8 h-8 rounded-full bg-badge-emerald/15 flex items-center justify-center text-badge-emerald">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
</div>
<p class="font-label-md text-label-md text-text-primary" id="toast-message">Aksi berhasil dilakukan!</p>
</div>
</div>
<!-- Page Header & Action Bar -->
<header class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-8">
<div class="max-w-2xl">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm uppercase tracking-wider mb-2.5">
<span class="material-symbols-outlined text-[14px]">groups</span>
        Modul Kolaborasi Multi-Disiplin
      </div>
<h1 class="font-headline-xl text-headline-xl text-text-primary tracking-tight">Manajemen Tim &amp; Kolaborasi</h1>
<p class="font-body-lg text-body-lg text-text-muted mt-2">
        Bentuk tim kolaborasi, undang rekan mahasiswa via NIM, dan kerjakan misi bersama untuk melipatgandakan akumulasi XP kelompok.
      </p>
</div>
<div class="flex flex-wrap items-center gap-3">
<button class="px-5 py-3 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-lg text-label-lg shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] transition-all flex items-center gap-2" onclick="triggerAction('Modal gabung tim dibuka. Masukkan 6 digit kode undangan kelompok.')">
<span class="material-symbols-outlined text-primary text-[20px]">key</span>
<span>Gabung Tim dengan Kode</span>
</button>
<button class="px-6 py-3 rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-lg text-label-lg shadow-[0_4px_14px_rgba(108,92,231,0.3)] hover:opacity-95 hover:-translate-y-0.5 transition-all flex items-center gap-2" onclick="triggerAction('Form pembuatan tim baru dimulai. Tentukan judul misi dan target anggota.')">
<span class="material-symbols-outlined text-[20px]">group_add</span>
<span>+ Buat Tim Baru</span>
</button>
</div>
</header>
<!-- Top KPI Summary Cards (Clean & Soft UI) -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
<!-- KPI 1 -->
<div class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex items-start justify-between relative overflow-hidden group hover:-translate-y-0.5 transition-all">
<div class="flex flex-col justify-between h-full">
<div>
<span class="font-label-md text-label-md text-text-muted">Tim Aktif Saya</span>
<h3 class="font-headline-lg text-headline-lg text-text-primary mt-1.5">2 Tim Berjalan</h3>
</div>
<div class="mt-4 flex items-center gap-2">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
            1 Tim Riset
          </span>
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-low text-text-muted font-label-sm text-label-sm">
            1 Kepanitiaan BEM
          </span>
</div>
</div>
<div class="w-12 h-12 rounded-2xl bg-pastel-lavender-start text-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[24px]">diversity_3</span>
</div>
</div>
<!-- KPI 2 -->
<div class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex items-start justify-between relative overflow-hidden group hover:-translate-y-0.5 transition-all">
<div class="flex flex-col justify-between h-full">
<div>
<span class="font-label-md text-label-md text-text-muted">Akumulasi XP Bersama</span>
<div class="flex items-baseline gap-2 mt-1.5">
<h3 class="font-headline-xl text-headline-xl text-text-primary">1,850</h3>
<span class="font-label-md text-label-md text-primary font-bold">XP</span>
</div>
</div>
<div class="mt-4 flex items-center gap-1.5 text-badge-emerald font-label-md text-label-md">
<span class="material-symbols-outlined text-[18px]">trending_up</span>
<span>+350 XP pekan ini dari verifikasi LPJ</span>
</div>
</div>
<div class="w-12 h-12 rounded-2xl bg-badge-emerald/10 text-badge-emerald flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[24px]">stars</span>
</div>
</div>
<!-- KPI 3 -->
<div class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex items-start justify-between relative overflow-hidden group hover:-translate-y-0.5 transition-all">
<div class="flex flex-col justify-between h-full">
<div>
<span class="font-label-md text-label-md text-text-muted">Undangan Masuk</span>
<h3 class="font-headline-lg text-headline-lg text-text-primary mt-1.5">1 Permintaan</h3>
</div>
<div class="mt-4 flex items-center gap-2">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container/20 text-on-secondary-container font-label-sm text-label-sm font-bold">
<span class="w-2 h-2 rounded-full bg-secondary animate-ping"></span>
            Menunggu Respon Anda
          </span>
</div>
</div>
<div class="w-12 h-12 rounded-2xl bg-secondary-fixed text-on-secondary-container flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[24px]">mark_email_unread</span>
</div>
</div>
</section>
<!-- Main 2-Column Content Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- LEFT COLUMN: Primary Team Hub & Active Projects (8 cols ~66%) -->
<div class="lg:col-span-8 flex flex-col gap-8">
<!-- Primary Team Card -->
<section class="bg-surface-card rounded-[24px] p-8 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] relative overflow-hidden">
<!-- Card Top Decorative Glow -->
<div class="absolute -top-24 -right-24 w-64 h-64 bg-pastel-lavender-start/70 rounded-full blur-3xl pointer-events-none"></div>
<!-- Team Header & Meta -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-border-subtle/50">
<div class="flex items-center gap-4">
<div class="w-16 h-16 rounded-[20px] bg-gradient-to-tr from-primary to-badge-violet text-on-primary flex items-center justify-center font-headline-md text-headline-md font-bold shadow-md shadow-primary/20">
              SI
            </div>
<div>
<div class="flex items-center gap-2.5 flex-wrap">
<h2 class="font-headline-lg text-headline-lg text-text-primary">Tim Synapse Innovation</h2>
<span class="px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
                  Kompetisi &amp; Riset
                </span>
</div>
<div class="flex items-center gap-3 text-text-muted font-body-sm text-body-sm mt-1">
<span class="flex items-center gap-1 text-badge-emerald font-semibold">
<span class="w-2 h-2 rounded-full bg-badge-emerald"></span>
                  Status: Aktif
                </span>
<span>•</span>
<span>4 dari 5 Anggota Terisi</span>
<span>•</span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[15px]">calendar_today</span>
                  Batas Akhir: 18 Nov 2025
                </span>
</div>
</div>
</div>
<div class="flex items-center gap-2">
<button class="p-2.5 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant transition-colors" onclick="triggerAction('Tautan undangan tim disalin ke papan klip!')" title="Salin Tautan Tim">
<span class="material-symbols-outlined text-[20px]">share</span>
</button>
<button class="p-2.5 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant transition-colors" onclick="triggerAction('Membuka konfigurasi tim internal.')" title="Pengaturan Tim">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
<!-- Target Mission Spotlight Box -->
<div class="mt-6 p-5 rounded-[20px] bg-gradient-to-r from-pastel-lavender-start to-pastel-lavender-end flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex items-start gap-3.5">
<div class="w-10 h-10 rounded-full bg-surface-card flex items-center justify-center text-primary shadow-sm flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[22px]">workspace_premium</span>
</div>
<div>
<span class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-bold">Misi Utama Berjalan</span>
<h3 class="font-headline-sm text-headline-sm text-text-primary mt-0.5">National Student Innovation Championship 2025</h3>
<p class="font-body-sm text-body-sm text-text-muted mt-0.5">Kategori: Kecerdasan Artifisial untuk Edukasi Berkelanjutan</p>
</div>
</div>
<div class="flex items-center gap-2.5 self-start md:self-auto flex-shrink-0">
<div class="px-3.5 py-1.5 rounded-full bg-surface-card shadow-sm flex items-center gap-1.5 text-primary font-label-md text-label-md">
<span class="material-symbols-outlined text-[18px]">bolt</span>
<span>+600 XP / Anggota</span>
</div>
<div class="px-3.5 py-1.5 rounded-full bg-badge-gold/20 text-text-primary font-label-md text-label-md flex items-center gap-1.5">
<span class="material-symbols-outlined text-badge-gold text-[18px]">military_tech</span>
<span class="font-semibold">Badge Inovator</span>
</div>
</div>
</div>
<!-- Milestone Progress Section -->
<div class="mt-8">
<div class="flex items-center justify-between mb-3">
<div>
<h4 class="font-label-lg text-label-lg text-text-primary">Milestone Progres Bersama</h4>
<p class="font-body-sm text-body-sm text-text-muted">Tahap 3 dari 4 berjalan sesuai jadwal kurikulum kompetisi</p>
</div>
<div class="flex items-center gap-2">
<span class="font-headline-sm text-headline-sm text-primary">65%</span>
<span class="font-label-md text-label-md text-text-muted">Selesai</span>
</div>
</div>
<!-- XP Progress Bar Component -->
<div class="w-full h-3 bg-surface-container rounded-full overflow-hidden mb-6 p-0.5">
<div class="h-full bg-gradient-to-r from-primary-container via-badge-violet to-secondary rounded-full transition-all duration-700" style="width: 65%;"></div>
</div>
<!-- Horizontal Stepper Pills -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
<!-- Step 1 -->
<div class="p-3.5 rounded-[16px] bg-badge-emerald/10 flex flex-col justify-between gap-2">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm font-bold text-badge-emerald uppercase">Tahap 01</span>
<span class="material-symbols-outlined text-badge-emerald text-[18px]">task_alt</span>
</div>
<p class="font-label-md text-label-md text-text-primary leading-tight">Registrasi &amp; Tim</p>
<span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Selesai</span>
</div>
<!-- Step 2 -->
<div class="p-3.5 rounded-[16px] bg-badge-emerald/10 flex flex-col justify-between gap-2">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm font-bold text-badge-emerald uppercase">Tahap 02</span>
<span class="material-symbols-outlined text-badge-emerald text-[18px]">task_alt</span>
</div>
<p class="font-label-md text-label-md text-text-primary leading-tight">Submission Proposal</p>
<span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Disetujui Dosen</span>
</div>
<!-- Step 3 (Active) -->
<div class="p-3.5 rounded-[16px] bg-pastel-lavender-start shadow-sm flex flex-col justify-between gap-2 relative">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm font-bold text-primary uppercase">Tahap 03</span>
<span class="material-symbols-outlined text-primary text-[18px] animate-spin">progress_activity</span>
</div>
<p class="font-label-md text-label-md text-primary font-bold leading-tight">Pengembangan Prototipe</p>
<span class="font-body-sm text-body-sm text-primary font-semibold">Sedang Berjalan</span>
</div>
<!-- Step 4 -->
<div class="p-3.5 rounded-[16px] bg-surface-sidebar/70 flex flex-col justify-between gap-2">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm font-bold text-text-muted uppercase">Tahap 04</span>
<span class="material-symbols-outlined text-outline text-[18px]">hourglass_empty</span>
</div>
<p class="font-label-md text-label-md text-text-muted leading-tight">Presentasi Final</p>
<span class="font-body-sm text-body-sm text-text-muted">Menunggu</span>
</div>
</div>
</div>
<!-- Team Members List Section -->
<div class="mt-8">
<div class="flex items-center justify-between mb-4">
<div>
<h4 class="font-label-lg text-label-lg text-text-primary">Daftar Anggota Tim &amp; Kontribusi</h4>
<p class="font-body-sm text-body-sm text-text-muted">Akumulasi XP terverifikasi berdasarkan log aktivitas pengerjaan</p>
</div>
<span class="font-label-sm text-label-sm text-text-muted uppercase bg-surface-sidebar px-3 py-1 rounded-full">4 / 5 Kursi Aktif</span>
</div>
<!-- Members Grid List -->
<div class="flex flex-col gap-3">
<!-- Member 1: Current User / Leader -->
<div class="p-4 rounded-[18px] bg-surface-bright hover:bg-pastel-lavender-start/40 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-center gap-3.5">
<div class="relative">
<img alt="Nabila Putri" class="w-12 h-12 rounded-full object-cover" data-alt="Close up portrait photo of Nabila Putri, an Indonesian female university student with a neat veil smiling warmly in a bright modern campus library setting with soft purple and white ambient light." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgK2nQyzm1HpWQ7j9Kg0wj11SRp5Uq6wKP2UPZ418MG2Ql6CO8Qcl4H8BkOeZ4PtXWv0KKcCtuvofl88wFguGq-dA1n_woXM-Jo_BlKJ7FSxmyQZNY1nd5CEKazxUhdCHHxbVfKJkBkwI2BK68Fmdia2zgxBHziOrUThDodnOsjI5GiWSiJ-ad_TFituLs-l2OaccS2TQAv40IXVxZKLxgWkuN-EFEAkHUHlAIR88"/>
<span class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-badge-gold text-on-surface flex items-center justify-center shadow-sm text-[12px]" title="Ketua Tim">
<span class="material-symbols-outlined text-[13px] text-white">star</span>
</span>
</div>
<div>
<div class="flex items-center gap-2">
<h5 class="font-label-lg text-label-lg text-text-primary">Nabila Putri</h5>
<span class="px-2.5 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm">Ketua / PIC</span>
<span class="font-label-sm text-label-sm text-text-muted">(Anda)</span>
</div>
<div class="flex items-center gap-3 text-text-muted font-body-sm text-body-sm mt-0.5">
<span>Sistem Informasi</span>
<span>•</span>
<span>NIM: 2206123456</span>
</div>
</div>
</div>
<div class="flex items-center gap-5 justify-between sm:justify-end">
<div class="text-right">
<div class="flex items-center gap-1 justify-end font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-[16px]">bolt</span>
<span>750 XP</span>
</div>
<span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Aktif • 4 Submisi</span>
</div>
<div class="w-8 h-8 rounded-full bg-badge-emerald/10 text-badge-emerald flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
</div>
</div>
</div>
<!-- Member 2 -->
<div class="p-4 rounded-[18px] bg-surface-bright hover:bg-pastel-lavender-start/40 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-center gap-3.5">
<img alt="Rian Firmansyah" class="w-12 h-12 rounded-full object-cover" data-alt="Portrait photo of Rian Firmansyah, an Indonesian male student with spectacles and casual university attire in a collaborative technology workspace with warm natural light." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCd2_Ys4E9_pBmSoTMwkM6bZnr5YKytIy8UV0mW0zkHrCk2z0A2KsqUhg7u0JkGagXQIh9vKkgt_xb4jdyQ5H11o6-5UDTXdEcTLdtJI_Opmm0UqT90oAS3hpg3F2Fc9bfKqdnyqMuRFUYVUubUiyaDyp9PuJbf4Gcg9xpeFtlXE_FKs9V8lL03demj7LmuxyAdoQSGRluBT2fBALWL4vIs_VuuVmn2ZIcxeu6KThI"/>
<div>
<div class="flex items-center gap-2">
<h5 class="font-label-lg text-label-lg text-text-primary">Rian Firmansyah</h5>
<span class="px-2.5 py-0.5 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">Lead Developer</span>
</div>
<div class="flex items-center gap-3 text-text-muted font-body-sm text-body-sm mt-0.5">
<span>Teknik Informatika</span>
<span>•</span>
<span>NIM: 2206123890</span>
</div>
</div>
</div>
<div class="flex items-center gap-5 justify-between sm:justify-end">
<div class="text-right">
<div class="flex items-center gap-1 justify-end font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-[16px]">bolt</span>
<span>520 XP</span>
</div>
<span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Aktif • 3 Submisi</span>
</div>
<button class="w-8 h-8 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant flex items-center justify-center transition-colors" onclick="triggerAction('Detail kontribusi Rian Firmansyah dibuka')">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
<!-- Member 3 -->
<div class="p-4 rounded-[18px] bg-surface-bright hover:bg-pastel-lavender-start/40 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-center gap-3.5">
<img alt="Dinda Ayu Lestari" class="w-12 h-12 rounded-full object-cover" data-alt="Portrait photograph of Dinda Ayu Lestari, a creative female Indonesian engineering student smiling gently in a clean modern makerspace laboratory with lavender lighting accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9D586is9YMjSGS9VM3vIB2BbnjJvkVdEYxtyH3zbRKiOZmQtNTzAXnMaNawb1llx1EZ5PQR5bS88FFKDj7mr21n2Zy5Hrh0jFG0_MFzMS6ewzE1aB_2H3Qe8YtB1Stjdf4C1JSOeggdYpHkeYtKgPsm4YmdUIgGroN3p3s09WYcaBk2nDdO0OVwRPpo51FKoVr1fvbRksUx9TSgjV5xzp6aTOrsMeGd1Brb6ia4g"/>
<div>
<div class="flex items-center gap-2">
<h5 class="font-label-lg text-label-lg text-text-primary">Dinda Ayu Lestari</h5>
<span class="px-2.5 py-0.5 rounded-full bg-badge-sky/15 text-badge-sky font-label-sm text-label-sm">Hardware &amp; IoT</span>
</div>
<div class="flex items-center gap-3 text-text-muted font-body-sm text-body-sm mt-0.5">
<span>Teknik Elektro</span>
<span>•</span>
<span>NIM: 2106124542</span>
</div>
</div>
</div>
<div class="flex items-center gap-5 justify-between sm:justify-end">
<div class="text-right">
<div class="flex items-center gap-1 justify-end font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-[16px]">bolt</span>
<span>380 XP</span>
</div>
<span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Aktif • 2 Submisi</span>
</div>
<button class="w-8 h-8 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant flex items-center justify-center transition-colors" onclick="triggerAction('Detail kontribusi Dinda Ayu Lestari dibuka')">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
<!-- Member 4 -->
<div class="p-4 rounded-[18px] bg-surface-bright hover:bg-pastel-lavender-start/40 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-center gap-3.5">
<img alt="Farhan Maulana" class="w-12 h-12 rounded-full object-cover" data-alt="Portrait photograph of Farhan Maulana, an Indonesian university student with friendly expression in an academic research center with clean white and light violet tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCAd5q42LpKmmZHIEWHFGgvTkc4SJxxHo5p_7WerVbTxA0wGi8F7ai-Itb_Qd581zlYWRoKyFROiar2gUfi3kpZ8oeOH0ddk5dbb8h2aq7oILk9756ObAFbn0TtEJyVYmZ-7YhJx_7XCbtkEyDUJbcwGI8uwy5we2JDQbtYI-ToyWvM15UkGUTxfvOiTzj202WnLnz8tw9GhuRIKzpX8kK6M9GV9y7oX60vzgcQ3M"/>
<div>
<div class="flex items-center gap-2">
<h5 class="font-label-lg text-label-lg text-text-primary">Farhan Maulana</h5>
<span class="px-2.5 py-0.5 rounded-full bg-badge-gold/20 text-on-surface font-label-sm text-label-sm">UI/UX Designer</span>
</div>
<div class="flex items-center gap-3 text-text-muted font-body-sm text-body-sm mt-0.5">
<span>Teknologi Informasi</span>
<span>•</span>
<span>NIM: 2206123112</span>
</div>
</div>
</div>
<div class="flex items-center gap-5 justify-between sm:justify-end">
<div class="text-right">
<div class="flex items-center gap-1 justify-end font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-[16px]">bolt</span>
<span>200 XP</span>
</div>
<span class="font-body-sm text-body-sm text-badge-emerald font-semibold">Aktif • 1 Submisi</span>
</div>
<button class="w-8 h-8 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-on-surface-variant flex items-center justify-center transition-colors" onclick="triggerAction('Detail kontribusi Farhan Maulana dibuka')">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
<!-- Slot 5: Empty Slot CTA -->
<button class="p-4 rounded-[18px] bg-pastel-lavender-start/30 hover:bg-pastel-lavender-start/80 transition-all flex items-center justify-between text-left group" onclick="focusInviteInput()">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-full bg-surface-card flex items-center justify-center text-primary group-hover:scale-105 transition-transform shadow-sm">
<span class="material-symbols-outlined text-[24px]">person_add</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-primary font-bold">1 Slot Tersedia: + Tambah Anggota</p>
<p class="font-body-sm text-body-sm text-text-muted">Undang mahasiswa untuk melengkapi kuota maksimal tim lomba (5/5)</p>
</div>
</div>
<div class="px-4 py-2 rounded-full bg-primary text-on-primary font-label-md text-label-md group-hover:shadow-md transition-all">
                Undang Sekarang
              </div>
</button>
</div>
</div>
<!-- Quick Collaboration Action Bar -->
<div class="mt-8 pt-6 border-t border-border-subtle/50 flex flex-wrap items-center justify-between gap-4">
<div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm">
<span class="material-symbols-outlined text-primary text-[18px]">folder_shared</span>
<span>Berkas tersimpan aman di repositori Kampus Merdeka</span>
</div>
<div class="flex flex-wrap items-center gap-3">
<button class="px-5 py-2.5 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-text-primary font-label-md text-label-md transition-colors flex items-center gap-2" onclick="triggerAction('Membuka kanvas catatan kolaborasi dan forum diskusi tim.')">
<span class="material-symbols-outlined text-primary text-[18px]">forum</span>
<span>Ruang Diskusi &amp; Catatan</span>
</button>
<button class="px-5 py-2.5 rounded-full bg-primary text-on-primary hover:bg-primary/95 font-label-md text-label-md shadow-sm transition-all flex items-center gap-2" onclick="triggerAction('Membuka formulir unggah bukti progres / prototipe tim.')">
<span class="material-symbols-outlined text-[18px]">cloud_upload</span>
<span>Unggah Bukti Bersama (LPJ/Prototipe)</span>
</button>
</div>
</div>
</section>
<!-- Secondary Team Card: Other Teams -->
<section class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)]">
<div class="flex items-center justify-between mb-4">
<div>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Tim Lain yang Diikuti</h3>
<p class="font-body-sm text-body-sm text-text-muted">Kelola peran aktif Anda dalam kepanitiaan dan proyek kampus lainnya</p>
</div>
<button class="font-label-md text-label-md text-primary hover:underline" onclick="triggerAction('Daftar riwayat tim terdahulu ditampilkan')">
            Lihat Arsip Tim
          </button>
</div>
<!-- Compact Secondary Team Item -->
<div class="p-5 rounded-[20px] bg-surface-bright flex flex-col md:flex-row md:items-center justify-between gap-5 hover:bg-pastel-lavender-start/30 transition-all">
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-[16px] bg-badge-sky/15 text-badge-sky flex items-center justify-center font-headline-sm text-headline-sm font-bold flex-shrink-0">
              PI
            </div>
<div>
<div class="flex items-center gap-2.5 flex-wrap">
<h4 class="font-label-lg text-label-lg text-text-primary font-bold">Panitia Inisiasi Kampus 2025</h4>
<span class="px-2.5 py-0.5 rounded-full bg-badge-emerald/10 text-badge-emerald font-label-sm text-label-sm font-semibold">
                  Divisi Acara
                </span>
</div>
<div class="flex items-center gap-4 text-text-muted font-body-sm text-body-sm mt-1">
<span>6 Anggota Aktif</span>
<span>•</span>
<span>Akumulasi: 950 XP</span>
<span>•</span>
<span class="text-primary font-semibold">Progres: 80%</span>
</div>
<!-- Mini Progress Track -->
<div class="w-48 sm:w-64 h-1.5 bg-surface-container rounded-full mt-2.5 overflow-hidden">
<div class="h-full bg-badge-emerald rounded-full" style="width: 80%;"></div>
</div>
</div>
</div>
<div class="flex items-center gap-3 self-end md:self-center">
<button class="px-4 py-2 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-md text-label-md shadow-sm transition-all flex items-center gap-1.5" onclick="triggerAction('Beralih fokus ke Panitia Inisiasi Kampus 2025')">
<span>Kelola Tim</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</section>
</div>
<!-- RIGHT COLUMN: Sidebar Controls & Recruitment Tools (4 cols ~34%) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Widget 1: Invite New Members Directly -->
<section class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] relative">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">person_search</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Undang Mahasiswa</h3>
</div>
<span class="font-label-sm text-label-sm text-primary bg-pastel-lavender-start px-2 py-0.5 rounded-full font-bold">Instan</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted mb-4">
          Ketik NIM atau nama rekan satu angkatan untuk mengirimkan undangan kolaborasi langsung.
        </p>
<!-- Search Input Group -->
<div class="relative mb-3">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-text-muted text-[18px]">search</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-surface-bright text-text-primary placeholder:text-text-muted rounded-[14px] font-body-md text-body-md outline-none focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] transition-all" id="invite-search-input" placeholder="Cari via NIM (cth: 2301...) atau nama..." type="text" value="Aditya"/>
</div>
<!-- Role Selection Dropdown -->
<div class="mb-4">
<label class="block font-label-sm text-label-sm text-text-muted mb-1.5 uppercase font-bold">Rekomendasi Posisi Peran</label>
<div class="relative">
<select class="w-full px-3.5 py-2.5 bg-surface-bright text-text-primary rounded-[14px] font-body-md text-body-md outline-none appearance-none cursor-pointer focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] transition-all" id="invite-role-select">
<option value="Anggota Teknis / Developer">Anggota Teknis (Developer / AI)</option>
<option value="Desainer UI/UX">Desainer UI/UX</option>
<option value="Riset &amp; Analisis Data">Riset &amp; Analisis Data</option>
<option value="Administrasi &amp; LPJ">Administrasi &amp; LPJ</option>
</select>
<span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[18px]">expand_more</span>
</div>
</div>
<!-- Autocomplete Recommendation Box -->
<div class="p-3.5 rounded-[16px] bg-pastel-lavender-start/40 flex items-center justify-between gap-3 mb-4 transition-all" id="autocomplete-box">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary/15 text-primary flex items-center justify-center font-label-md text-label-md font-bold">
              AS
            </div>
<div>
<p class="font-label-md text-label-md text-text-primary font-bold leading-tight">Aditya Saputra</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">Ilmu Komputer • NIM 2301005</p>
</div>
</div>
<button class="px-3.5 py-1.5 rounded-full bg-primary text-on-primary hover:bg-primary/90 font-label-sm text-label-sm transition-all shadow-sm flex items-center gap-1" id="btn-invite-aditya" onclick="inviteStudent('Aditya Saputra')">
<span class="material-symbols-outlined text-[14px]">add</span>
<span>Undang</span>
</button>
</div>
<!-- Info Note -->
<div class="p-3 rounded-[14px] bg-surface-bright flex items-start gap-2.5 text-text-muted">
<span class="material-symbols-outlined text-primary text-[18px] flex-shrink-0 mt-0.5">info</span>
<p class="font-body-sm text-body-sm leading-relaxed">
            Anggota yang bergabung otomatis mendapatkan pembagian XP proporsional saat misi disetujui verifikator akademik.
          </p>
</div>
</section>
<!-- Widget 2: Incoming Requests & Invites -->
<section class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)]">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[20px]">mail</span>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Permintaan Masuk</h3>
</div>
<span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-container font-label-sm text-label-sm font-bold" id="badge-invite-count">1 Baru</span>
</div>
<div class="flex flex-col gap-3" id="incoming-invite-container">
<!-- Invite Card -->
<div class="p-4 rounded-[18px] bg-gradient-to-br from-pastel-lavender-start to-surface-card flex flex-col gap-3 transition-all" id="card-invite-fintech">
<div class="flex items-start gap-3">
<div class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-label-md flex-shrink-0 shadow-sm">
                HF
              </div>
<div>
<h4 class="font-label-md text-label-md text-text-primary font-bold">Tim Hackathon FinTech 2025</h4>
<p class="font-body-sm text-body-sm text-text-muted">Diundang oleh <strong class="text-text-primary">Syadira Putri</strong> (Sistem Informasi)</p>
</div>
</div>
<div class="px-3 py-2 rounded-[12px] bg-surface-card/80 text-text-muted font-body-sm text-body-sm">
<span class="font-label-sm text-label-sm text-primary block uppercase font-bold">Misi Target</span>
              Hackathon Solusi Finansial Mahasiswa Nasional
            </div>
<!-- Quick Actions -->
<div class="flex items-center gap-2.5 pt-1">
<button class="flex-1 py-2 rounded-full bg-badge-emerald text-on-primary font-label-sm text-label-sm font-semibold hover:bg-badge-emerald/90 transition-all flex items-center justify-center gap-1.5 shadow-sm" onclick="acceptInvite('card-invite-fintech')">
<span class="material-symbols-outlined text-[16px]">check</span>
<span>Terima</span>
</button>
<button class="px-4 py-2 rounded-full bg-surface-sidebar hover:bg-error-container text-on-surface-variant hover:text-on-error-container font-label-sm text-label-sm font-semibold transition-all" onclick="declineInvite('card-invite-fintech')">
                Tolak
              </button>
</div>
</div>
</div>
</section>
<!-- Widget 3: Active Collaboration Leaderboard -->
<section class="bg-surface-card rounded-[24px] p-6 shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)]">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-badge-gold text-[20px]">trophy</span>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Top Tim Kampus</h3>
</div>
<span class="font-label-sm text-label-sm text-text-muted">Bulan Ini</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted mb-4">Peringkat kontribusi XP gabungan terverifikasi</p>
<div class="flex flex-col gap-2.5">
<!-- Rank 1 (Gold Tint) -->
<div class="p-3.5 rounded-[16px] bg-[#FEFCE8] flex items-center justify-between gap-3 transition-transform hover:-translate-y-0.5">
<div class="flex items-center gap-3">
<div class="w-7 h-7 rounded-full bg-badge-gold text-on-surface font-headline-sm text-headline-sm font-bold flex items-center justify-center text-[12px] shadow-sm">
                1
              </div>
<div>
<p class="font-label-md text-label-md text-text-primary font-bold">Tim CyberGuard</p>
<p class="font-body-sm text-body-sm text-text-muted">5 Anggota • Keamanan Siber</p>
</div>
</div>
<div class="text-right">
<span class="font-label-md text-label-md text-text-primary font-bold">3,200 XP</span>
<span class="block font-body-sm text-body-sm text-badge-emerald">Juara 1</span>
</div>
</div>
<!-- Rank 2 (Current Team - Soft Highlight) -->
<div class="p-3.5 rounded-[16px] bg-pastel-lavender-start flex items-center justify-between gap-3 transition-transform hover:-translate-y-0.5">
<div class="flex items-center gap-3">
<div class="w-7 h-7 rounded-full bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center text-[12px] shadow-sm">
                2
              </div>
<div>
<div class="flex items-center gap-1.5">
<p class="font-label-md text-label-md text-primary font-bold">Tim Synapse</p>
<span class="px-1.5 py-0.2 rounded-full bg-primary/20 text-primary font-label-sm text-label-sm text-[9px]">Anda</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted">4 Anggota • Riset AI</p>
</div>
</div>
<div class="text-right">
<span class="font-label-md text-label-md text-primary font-bold">1,850 XP</span>
<span class="block font-body-sm text-body-sm text-primary">+350 pekan ini</span>
</div>
</div>
<!-- Rank 3 (Bronze Tint) -->
<div class="p-3.5 rounded-[16px] bg-[#FFF7ED] flex items-center justify-between gap-3 transition-transform hover:-translate-y-0.5">
<div class="flex items-center gap-3">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container font-headline-sm text-headline-sm font-bold flex items-center justify-center text-[12px] shadow-sm">
                3
              </div>
<div>
<p class="font-label-md text-label-md text-text-primary font-bold">Tim KKN Digital</p>
<p class="font-body-sm text-body-sm text-text-muted">6 Anggota • Pengabdian</p>
</div>
</div>
<div class="text-right">
<span class="font-label-md text-label-md text-text-primary font-bold">1,600 XP</span>
<span class="block font-body-sm text-body-sm text-text-muted">Stabil</span>
</div>
</div>
</div>
<button class="w-full mt-4 py-2.5 rounded-full bg-surface-sidebar hover:bg-pastel-lavender-start text-primary font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center gap-1.5" onclick="triggerAction('Membuka leaderboard kolaborasi menyeluruh fakultas &amp; universitas.')">
<span>Lihat Leaderboard Lengkap</span>
<span class="material-symbols-outlined text-[16px]">open_in_new</span>
</button>
</section>
</div>
</div>
<!-- Inline Micro-interactions Script -->
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
        input.classList.add('ring-2', 'ring-primary');
        setTimeout(() => input.classList.remove('ring-2', 'ring-primary'), 1500);
      }
    }

    function inviteStudent(name) {
      const roleSelect = document.getElementById('invite-role-select');
      const selectedRole = roleSelect ? roleSelect.value : 'Anggota Tim';
      showNotification(`Undangan berhasil dikirimkan kepada ${name} sebagai ${selectedRole}!`);
      const btn = document.getElementById('btn-invite-aditya');
      if (btn) {
        btn.textContent = 'Terkirim';
        btn.classList.remove('bg-primary');
        btn.classList.add('bg-badge-emerald', 'pointer-events-none');
      }
    }

    function acceptInvite(cardId) {
      const card = document.getElementById(cardId);
      if (card) {
        card.style.opacity = '0';
        card.style.transform = 'scale(0.95)';
        setTimeout(() => {
          card.remove();
          showNotification('Selamat! Anda telah bergabung dengan Tim Hackathon FinTech 2025.');
          updateInviteBadge();
        }, 250);
      }
    }

    function declineInvite(cardId) {
      const card = document.getElementById(cardId);
      if (card) {
        card.style.opacity = '0';
        card.style.transform = 'scale(0.95)';
        setTimeout(() => {
          card.remove();
          showNotification('Undangan tim telah ditolak.');
          updateInviteBadge();
        }, 250);
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
