@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa — CampusQuest')

@section('content')
<!-- EPIC 2: Sistem Gamifikasi (PIC: Nathasya Yuan Maharani - 103032400001) -->
<div class="flex flex-col w-full space-y-8"><!-- 1. Hero Welcome & Integrated Clean XP Bar -->
<section class="bg-surface-card rounded-[24px] p-8 shadow-xs border border-border-subtle/50 space-y-6">
<div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
<div class="space-y-1.5">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md">
<span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">stars</span>
<span>Semester 5 • Jalur Prestasi Akademik &amp; Riset</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-text-primary tracking-tight font-bold">
        Selamat Datang Kembali, Nabila! 👋
      </h1>
<p class="font-body-md text-body-md text-text-muted max-w-xl leading-relaxed">
        Tinggal <span class="text-primary font-semibold">2 quest lagi</span> untuk naik ke Level 4 (Honors) dan membuka transkrip portofolio terverifikasi.
      </p>
</div>
<div class="shrink-0">
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-sm hover:opacity-95 hover:-translate-y-0.5 transition-all" href="/missions">
<span class="material-symbols-outlined text-[18px]">explore</span>
<span>Jelajahi Misi</span>
</a>
</div>
</div>
<!-- Slim & Elegant Integrated XP Status -->
<div class="pt-4 border-t border-surface-container/60 space-y-2.5">
<div class="flex flex-wrap items-center justify-between gap-3 text-label-md font-label-md">
<div class="flex items-center gap-2.5">
<span class="px-2.5 py-0.5 rounded-full bg-primary-container text-on-primary font-semibold text-label-sm">Level 3</span>
<span class="text-text-primary font-semibold">Explorer Scholar</span>
<span class="text-text-muted font-normal">• Tier Perak</span>
</div>
<div class="flex items-center gap-2 text-text-muted">
<span class="text-primary font-bold font-body-md">2,450</span>
<span>/ 3,000 XP</span>
<span class="text-badge-emerald font-semibold ml-1.5">(81%)</span>
</div>
</div>
<div class="w-full h-2.5 bg-surface-container rounded-full overflow-hidden p-0.5">
<div class="h-full rounded-full bg-gradient-to-r from-primary-container to-secondary transition-all duration-1000 ease-out" style="width: 81%;"></div>
</div>
<div class="flex justify-between font-label-sm text-label-sm text-text-muted pt-0.5">
<span>Level 3 (2,000 XP)</span>
<span>550 XP tersisa untuk Level 4</span>
<span>Level 4 (3,000 XP)</span>
</div>
</div>
</section>
<!-- 2. Clean Key Metrics (3 Airy Cards) -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-card rounded-[20px] p-6 shadow-xs border border-border-subtle/40 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<span class="font-label-md text-label-md text-text-muted">Quest Selesai</span>
<div class="w-9 h-9 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">task_alt</span>
</div>
</div>
<div>
<div class="text-[30px] font-bold text-text-primary leading-tight">14</div>
<p class="font-body-sm text-body-sm text-badge-emerald mt-1 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">verified</span> Terverifikasi Dosen Wali
      </p>
</div>
</div>
<div class="bg-surface-card rounded-[20px] p-6 shadow-xs border border-border-subtle/40 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<span class="font-label-md text-label-md text-text-muted">Ranking Kampus</span>
<div class="w-9 h-9 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">leaderboard</span>
</div>
</div>
<div>
<div class="text-[30px] font-bold text-text-primary leading-tight">#12</div>
<p class="font-body-sm text-body-sm text-badge-emerald mt-1 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span> Top 5% skala nasional
      </p>
</div>
</div>
<div class="bg-surface-card rounded-[20px] p-6 shadow-xs border border-border-subtle/40 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<span class="font-label-md text-label-md text-text-muted">Badge Diraih</span>
<div class="w-9 h-9 rounded-full bg-[#FEF9E7] text-[#B7950B] flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">military_tech</span>
</div>
</div>
<div>
<div class="text-[30px] font-bold text-text-primary leading-tight">8 <span class="text-[16px] text-text-muted font-normal">/ 16</span></div>
<p class="font-body-sm text-body-sm text-text-muted mt-1">4 Utama, 4 Spesialis</p>
</div>
</div>
</section>
<!-- 3. Minimalist 2-Column Core Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start pt-2" id="active-quests">
<!-- Kolom Kiri: Misi Aktif Prioritas (7 Cols) -->
<div class="lg:col-span-7 space-y-6">
<div class="flex items-center justify-between">
<div>
<h2 class="font-headline-md text-headline-md text-text-primary">Misi Aktif Prioritas</h2>
<p class="font-body-sm text-body-sm text-text-muted mt-0.5">Fokus utama untuk penyelesaian pekan ini</p>
</div>
<a class="font-label-md text-label-md text-primary hover:underline inline-flex items-center gap-1" href="/portfolio">
        Lihat Semua Misi <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Priority Card 1 -->
<div class="bg-surface-card rounded-[24px] p-7 shadow-xs border border-border-subtle/50 space-y-6 hover:shadow-sm transition-all">
<div class="space-y-2.5">
<div class="flex items-center justify-between">
<span class="px-3 py-1 rounded-full bg-[#FEF9E7] text-[#B7950B] font-label-md text-label-md flex items-center gap-1.5">
<span class="material-symbols-outlined text-[14px]">auto_stories</span>
<span>Riset &amp; Publikasi</span>
</span>
<span class="px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
            +300 XP
          </span>
</div>
<h3 class="font-headline-sm text-headline-sm text-text-primary pt-1">
          Penyusunan Paper Semnas Informatika
        </h3>
<p class="font-body-sm text-body-sm text-text-muted leading-relaxed">
          Kolaborasi riset kecerdasan buatan terapan bersama Lab Rekayasa Perangkat Lunak.
        </p>
</div>
<div class="space-y-2 pt-2 border-t border-surface-container/50">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-error flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-[14px]">timer</span> Deadline 3 hari lagi
          </span>
<span class="text-text-primary font-semibold">Progres 70%</span>
</div>
<div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full rounded-full bg-primary-container" style="width: 70%;"></div>
</div>
</div>
<div class="pt-2 flex items-center justify-between gap-4">
<div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm">
<div class="flex -space-x-2">
<div class="w-7 h-7 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-label-sm text-label-sm font-bold ring-2 ring-surface-card">NP</div>
<div class="w-7 h-7 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary font-label-sm text-label-sm font-bold ring-2 ring-surface-card">RA</div>
</div>
<span class="ml-1 font-body-sm text-body-sm text-text-muted">2 Rekan Tim</span>
</div>
<button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:opacity-90 transition-all">
          Unggah Draf Akhir
        </button>
</div>
</div>
<!-- Priority Card 2 -->
<div class="bg-surface-card rounded-[24px] p-7 shadow-xs border border-border-subtle/50 space-y-6 hover:shadow-sm transition-all">
<div class="space-y-2.5">
<div class="flex items-center justify-between">
<span class="px-3 py-1 rounded-full bg-[#EBF5FB] text-badge-sky font-label-md text-label-md flex items-center gap-1.5">
<span class="material-symbols-outlined text-[14px]">diversity_3</span>
<span>Kepanitiaan</span>
</span>
<span class="px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
            +250 XP
          </span>
</div>
<h3 class="font-headline-sm text-headline-sm text-text-primary pt-1">
          Panitia Inisiasi Kampus 2025
        </h3>
<p class="font-body-sm text-body-sm text-text-muted leading-relaxed">
          Koordinator Divisi Acara dan Pengenalan Budaya Digital Mahasiswa Baru.
        </p>
</div>
<div class="space-y-2 pt-2 border-t border-surface-container/50">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-text-muted flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">folder_zip</span> Verifikasi SK &amp; LPJ
          </span>
<span class="text-badge-emerald font-semibold">100% (Menunggu Validasi)</span>
</div>
<div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full rounded-full bg-badge-emerald" style="width: 100%;"></div>
</div>
</div>
<div class="pt-2 flex items-center justify-between gap-4">
<div class="flex items-center gap-1.5 text-text-muted font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[16px] text-badge-emerald" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Dokumen Lengkap</span>
</div>
<button class="px-5 py-2.5 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md hover:bg-pastel-lavender-start/80 transition-all">
          Lihat Pengajuan
        </button>
</div>
</div>
</div>
<!-- Kolom Kanan: Highlight & Aktivitas Terkini (5 Cols) -->
<div class="lg:col-span-5 space-y-6">
<!-- Ringkasan Galeri Badge Terbaru (3 Highlight) -->
<div class="bg-surface-card rounded-[24px] p-6 shadow-xs border border-border-subtle/50 space-y-5">
<div class="flex items-center justify-between">
<div>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Badge Terbaru</h3>
<p class="font-body-sm text-body-sm text-text-muted">Koleksi capaian terverifikasi</p>
</div>
<a class="font-label-sm text-label-sm text-primary hover:underline" href="/portfolio">
          Lihat di Portofolio
        </a>
</div>
<div class="grid grid-cols-3 gap-3">
<div class="flex flex-col items-center text-center p-3 rounded-[16px] bg-pastel-lavender-start/40 hover:bg-pastel-lavender-start/70 transition-colors">
<div class="w-11 h-11 rounded-full bg-badge-emerald/15 flex items-center justify-center text-badge-emerald mb-2">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
</div>
<span class="font-label-sm text-label-sm text-text-primary leading-tight line-clamp-1">Social</span>
<span class="font-body-sm text-body-sm text-text-muted text-[11px] mt-0.5">Warrior</span>
</div>
<div class="flex flex-col items-center text-center p-3 rounded-[16px] bg-pastel-lavender-start/40 hover:bg-pastel-lavender-start/70 transition-colors">
<div class="w-11 h-11 rounded-full bg-primary/15 flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">terminal</span>
</div>
<span class="font-label-sm text-label-sm text-text-primary leading-tight line-clamp-1">Code</span>
<span class="font-body-sm text-body-sm text-text-muted text-[11px] mt-0.5">Pioneer</span>
</div>
<div class="flex flex-col items-center text-center p-3 rounded-[16px] bg-pastel-lavender-start/40 hover:bg-pastel-lavender-start/70 transition-colors">
<div class="w-11 h-11 rounded-full bg-badge-sky/15 flex items-center justify-center text-badge-sky mb-2">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">groups_2</span>
</div>
<span class="font-label-sm text-label-sm text-text-primary leading-tight line-clamp-1">Master</span>
<span class="font-body-sm text-body-sm text-text-muted text-[11px] mt-0.5">Collab</span>
</div>
</div>
</div>
<!-- Aktivitas Terkini (Clean Minimal Timeline) -->
<div class="bg-surface-card rounded-[24px] p-6 shadow-xs border border-border-subtle/50 space-y-5">
<div class="flex items-center justify-between">
<div>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Aktivitas Terkini</h3>
<p class="font-body-sm text-body-sm text-text-muted">Riwayat validasi langsung</p>
</div>
<span class="material-symbols-outlined text-badge-emerald text-[18px]" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
<div class="space-y-4 pt-1">
<div class="flex items-start gap-3">
<div class="w-2 h-2 rounded-full bg-badge-emerald mt-2 shrink-0"></div>
<div class="flex-1">
<div class="flex items-center justify-between gap-2">
<p class="font-label-md text-label-md text-text-primary">Juara 2 UI/UX Innovation</p>
<span class="font-label-sm text-label-sm text-badge-emerald font-bold shrink-0">+200 XP</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted">BAAK • 2 jam lalu</p>
</div>
</div>
<div class="flex items-start gap-3">
<div class="w-2 h-2 rounded-full bg-badge-emerald mt-2 shrink-0"></div>
<div class="flex-1">
<div class="flex items-center justify-between gap-2">
<p class="font-label-md text-label-md text-text-primary">Volunteer Pengabdian Desa</p>
<span class="font-label-sm text-label-sm text-badge-emerald font-bold shrink-0">+150 XP</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted">LPPM • Kemarin</p>
</div>
</div>
<div class="flex items-start gap-3">
<div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div>
<div class="flex-1">
<div class="flex items-center justify-between gap-2">
<p class="font-label-md text-label-md text-text-primary">Asisten Dosen Basis Data</p>
<span class="font-label-sm text-label-sm text-badge-emerald font-bold shrink-0">+350 XP</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted">Kaprodi • 3 hari lalu</p>
</div>
</div>
</div>
<div class="pt-2">
<a class="inline-flex items-center justify-center gap-1.5 w-full py-2.5 rounded-full bg-pastel-lavender-start/60 text-primary font-label-md text-label-md hover:bg-pastel-lavender-start transition-colors" href="/portfolio">
<span>Lihat E-Sertifikat</span>
<span class="material-symbols-outlined text-[15px]">open_in_new</span>
</a>
</div>
</div>
</div>
</div></div>
@endsection
