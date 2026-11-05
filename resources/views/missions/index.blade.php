@extends('layouts.app')

@section('title', 'Katalog Quest & Eksplorasi Kampus — CampusQuest')

@section('content')
<!-- EPIC 4: Campus Exploration / Katalog Quest (PIC: Naira Cahaya P. D. Sinaga - 103032400100) -->
<div class="flex flex-col w-full">
<div class="flex flex-col gap-8 pb-16">
<!-- Top Header & Hero Brief -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
<div class="flex flex-col gap-2 max-w-2xl">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary w-fit">
<span class="material-symbols-outlined text-[16px]">verified_user</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider">Campus Exploration Hub • Epic 1 &amp; 4</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-text-primary tracking-tight">Katalog Misi &amp; Eksplorasi Kampus</h1>
<p class="font-body-lg text-body-lg text-text-muted">Temukan kegiatan akademik, kepanitiaan, dan kompetisi untuk meningkatkan XP serta portofolio resmimu secara otomatis dan terverifikasi.</p>
</div>
<!-- Quick Metrics Pill Counter -->
<div class="flex items-center gap-3 bg-surface-card p-3 rounded-[20px] shadow-sm">
<div class="flex items-center gap-3 px-3 py-1.5 bg-pastel-lavender-start rounded-full">
<span class="material-symbols-outlined text-primary text-[20px]">stars</span>
<div>
<p class="font-label-sm text-label-sm text-text-muted">TOTAL XP TERSEDIA</p>
<p class="font-label-lg text-label-lg text-primary font-bold">14,850 XP</p>
</div>
</div>
<div class="h-8 w-px bg-surface-container"></div>
<div class="flex items-center gap-3 px-3 py-1.5">
<span class="material-symbols-outlined text-badge-emerald text-[20px]">task_alt</span>
<div>
<p class="font-label-sm text-label-sm text-text-muted">MISI SELESAI</p>
<p class="font-label-lg text-label-lg text-text-primary font-bold">18 Misi</p>
</div>
</div>
</div>
</div>
<!-- Featured Quest High-Impact Banner -->
<div class="relative overflow-hidden rounded-[24px] bg-gradient-to-br from-pastel-lavender-start via-pastel-lavender-end to-surface-card p-8 lg:p-10 shadow-sm">
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
<div class="flex flex-col gap-4 max-w-2xl">
<div class="flex flex-wrap items-center gap-2">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-card text-badge-violet shadow-sm font-label-md text-label-md">
<span class="material-symbols-outlined text-[16px]">military_tech</span>
              Featured Epic Quest
            </span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-badge-gold/15 text-amber-700 font-label-md text-label-md">
<span class="material-symbols-outlined text-[16px]">workspace_premium</span>
              Badge: Innovator of The Year
            </span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-md text-label-md">
<span class="material-symbols-outlined text-[16px]">schedule</span>
              Berakhir dlm 12 Hari
            </span>
</div>
<div>
<h2 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">National Student Innovation Championship 2025</h2>
<p class="font-body-md text-body-md text-text-muted mt-2">Kompetisi karya tulis ilmiah dan prototipe terapan tingkat nasional. Validasi prestasi langsung terindeks di Transkrip Aktivitas Mahasiswa (SKPI) resmi kementerian.</p>
</div>
<div class="flex items-center gap-6 pt-2">
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold font-headline-sm">
                +600
              </div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-text-muted">REWARD XP</span>
<span class="font-label-lg text-label-lg text-primary font-bold">Prestasi Emas</span>
</div>
</div>
<div class="h-8 w-px bg-outline-variant/30"></div>
<div class="flex items-center gap-2.5">
<div class="w-10 h-10 rounded-full bg-surface-card text-text-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-primary text-[20px]">group</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-text-muted">KUOTA TIM</span>
<span class="font-label-lg text-label-lg text-text-primary font-semibold">3 - 5 Mahasiswa</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center gap-3 pt-2">
<button class="px-6 py-3 rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-lg text-label-lg shadow-md hover:opacity-95 transition-all flex items-center gap-2" onclick="openModal('National Student Innovation Championship 2025', 'Kompetisi Nasional')">
<span class="material-symbols-outlined text-[18px]">rocket_launch</span>
              Ambil Quest
            </button>
<button class="px-6 py-3 rounded-full bg-surface-card hover:bg-surface text-text-primary font-label-lg text-label-lg shadow-sm transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">info</span>
              Lihat Detail Silabus
            </button>
</div>
</div>
<div class="w-full lg:w-96 flex-shrink-0">
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm flex flex-col gap-4">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-text-muted">Progres Milestone Quest</span>
<span class="font-label-md text-label-md text-primary font-bold">2/5 Selesai</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2.5 overflow-hidden">
<div class="bg-gradient-to-r from-primary-container to-secondary h-2.5 rounded-full w-[40%] transition-all"></div>
</div>
<div class="flex flex-col gap-2.5 pt-1">
<div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm">
<span class="material-symbols-outlined text-badge-emerald text-[18px]">check_circle</span>
<span>Pendaftaran akun tim terverifikasi</span>
</div>
<div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm">
<span class="material-symbols-outlined text-badge-emerald text-[18px]">check_circle</span>
<span>Pengumpulan Proposal Gagasan Awal</span>
</div>
<div class="flex items-center gap-2 text-text-primary font-label-md text-label-md">
<span class="material-symbols-outlined text-primary text-[18px]">radio_button_checked</span>
<span>Review Dosen Pembimbing (Menunggu)</span>
</div>
<div class="flex items-center gap-2 text-text-muted font-body-sm text-body-sm opacity-60">
<span class="material-symbols-outlined text-[18px]">radio_button_unchecked</span>
<span>Uji Prototipe &amp; Demo Publik</span>
</div>
</div>
</div>
</div>
</div>
<!-- Subtle Decorative Canvas Elements -->
<div class="absolute -right-12 -bottom-12 w-64 h-64 bg-primary-fixed/30 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute right-1/3 -top-24 w-72 h-72 bg-secondary-fixed/20 rounded-full blur-3xl pointer-events-none"></div>
</div>
<!-- Search, Filter & Tag Selector Bar -->
<div class="bg-surface-card rounded-[24px] p-6 shadow-sm flex flex-col gap-5">
<div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
<!-- Wide Search Bar -->
<div class="relative w-full lg:max-w-xl">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-muted text-[22px]">search</span>
<input class="w-full pl-12 pr-4 py-3 bg-pastel-lavender-start/40 text-text-primary placeholder:text-text-muted rounded-full font-body-md text-body-md outline-none focus:bg-surface-card focus:ring-2 focus:ring-primary-container transition-all" id="searchInput" placeholder="Cari nama quest, penyelenggara, atau skill..." type="text"/>
</div>
<!-- Dropdown Controls -->
<div class="flex flex-wrap items-center gap-3 w-full lg:w-auto justify-start lg:justify-end">
<div class="relative">
<select aria-label="Filter Tingkat Kesulitan" class="appearance-none bg-surface-container-low hover:bg-surface-container px-4 py-2.5 pr-10 rounded-full font-label-md text-label-md text-text-primary outline-none cursor-pointer transition-all">
<option>Kesulitan: Semua</option>
<option>Pemula</option>
<option>Menengah</option>
<option>Mahir</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-text-muted text-[18px]">expand_more</span>
</div>
<div class="relative">
<select aria-label="Filter Rentang XP" class="appearance-none bg-surface-container-low hover:bg-surface-container px-4 py-2.5 pr-10 rounded-full font-label-md text-label-md text-text-primary outline-none cursor-pointer transition-all">
<option>Rentang XP: Semua</option>
<option>100 - 300 XP</option>
<option>301 - 500 XP</option>
<option>&gt; 500 XP</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-text-muted text-[18px]">expand_more</span>
</div>
<div class="relative">
<select aria-label="Filter Status Misi" class="appearance-none bg-surface-container-low hover:bg-surface-container px-4 py-2.5 pr-10 rounded-full font-label-md text-label-md text-text-primary outline-none cursor-pointer transition-all">
<option>Status: Tersedia</option>
<option>Segera Berakhir</option>
<option>Sudah Diambil</option>
<option>Verifikasi Selesai</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-text-muted text-[18px]">expand_more</span>
</div>
</div>
</div>
<!-- Category Filter Pills -->
<div class="flex items-center gap-2 overflow-x-auto pb-1 pt-1 no-scrollbar">
<button class="px-5 py-2.5 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
          Semua Misi (24)
        </button>
<button class="px-5 py-2.5 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
          Akademik &amp; Riset (8)
        </button>
<button class="px-5 py-2.5 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
          Kepanitiaan &amp; Organisasi (7)
        </button>
<button class="px-5 py-2.5 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
          Kompetisi &amp; Hackathon (5)
        </button>
<button class="px-5 py-2.5 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-on-surface-variant font-label-md text-label-md shadow-sm flex-shrink-0 transition-all">
          Seminar &amp; Workshop (4)
        </button>
</div>
</div>
<!-- Quest Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Card 1 -->
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-4">
<div class="flex items-start justify-between gap-3">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">menu_book</span>
              Akademik
            </span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">bolt</span>
              +450 XP
            </span>
</div>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">Individu</span>
<span class="font-body-sm text-body-sm text-text-muted">• Prosiding IEEE / SINTA 2</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">Publikasi Paper Prosiding Nasional</h3>
<p class="font-body-md text-body-md text-text-muted line-clamp-2">Kirim dan presentasikan makalah ilmiah di konferensi bertaraf nasional yang diakui kampus.</p>
</div>
</div>
<div class="pt-6 mt-6 border-t-0 bg-transparent flex flex-col gap-4">
<div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span>Deadline: 15 Okt 2025</span>
</div>
<span class="text-badge-emerald font-semibold">Tersedia</span>
</div>
<button class="w-full py-3 rounded-full bg-pastel-lavender-start hover:bg-primary-container text-primary hover:text-on-primary font-label-md text-label-md transition-all flex items-center justify-center gap-2" onclick="openModal('Publikasi Paper Prosiding Nasional', 'Akademik')">
<span class="material-symbols-outlined text-[18px]">upload_file</span>
            Ajukan Bukti Partisipasi
          </button>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-4">
<div class="flex items-start justify-between gap-3">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-pastel-lavender-start text-secondary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">groups</span>
              Kepanitiaan
            </span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">bolt</span>
              +350 XP
            </span>
</div>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">Organisasi</span>
<span class="font-body-sm text-body-sm text-text-muted">• SK BEM / DPM</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">Ketua Divisi Acara Expo Kampus</h3>
<p class="font-body-md text-body-md text-text-muted line-clamp-2">Pimpin orkestrasi acara tahunan orientasi mahasiswa baru dan stan UKM universitas.</p>
</div>
</div>
<div class="pt-6 mt-6 flex flex-col gap-4">
<div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span>Deadline: 28 Sep 2025</span>
</div>
<span class="text-error font-semibold">4 Hari Lagi</span>
</div>
<button class="w-full py-3 rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-md text-label-md shadow-sm hover:opacity-95 transition-all flex items-center justify-center gap-2" onclick="takeQuest('Ketua Divisi Acara Expo Kampus')">
<span class="material-symbols-outlined text-[18px]">add_task</span>
            Ambil Quest
          </button>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-4">
<div class="flex items-start justify-between gap-3">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">school</span>
              Seminar
            </span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">bolt</span>
              +150 XP
            </span>
</div>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">Sertifikat</span>
<span class="font-body-sm text-body-sm text-text-muted">• Google Developer Student Clubs</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">Peserta Workshop Cloud AI Google</h3>
<p class="font-body-md text-body-md text-text-muted line-clamp-2">Pelatihan intensif pemanfaatan Vertex AI dan model bahasa besar untuk automasi cerdas.</p>
</div>
</div>
<div class="pt-6 mt-6 flex flex-col gap-4">
<div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span>Deadline: Selesai Event</span>
</div>
<span class="text-badge-emerald font-semibold">Langsung Verif</span>
</div>
<button class="w-full py-3 rounded-full bg-pastel-lavender-start hover:bg-primary-container text-primary hover:text-on-primary font-label-md text-label-md transition-all flex items-center justify-center gap-2" onclick="openModal('Peserta Workshop Cloud AI Google', 'Seminar')">
<span class="material-symbols-outlined text-[18px]">file_upload</span>
            Upload Bukti
          </button>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-4">
<div class="flex items-start justify-between gap-3">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">biotech</span>
              Akademik
            </span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-badge-gold/20 text-amber-700 font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">bolt</span>
              +800 XP
            </span>
</div>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">Tim/Individu</span>
<span class="font-body-sm text-body-sm text-text-muted">• Kemendikbudristek Simbelmawa</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">Lolos Pendanaan PKM Riset</h3>
<p class="font-body-md text-body-md text-text-muted line-clamp-2">Program Kreativitas Mahasiswa skema riset eksakta atau sosial humaniora berprestasi tinggi.</p>
</div>
</div>
<div class="pt-6 mt-6 flex flex-col gap-4">
<div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span>Deadline: 30 Nov 2025</span>
</div>
<span class="text-primary font-semibold">Tingkat Nasional</span>
</div>
<button class="w-full py-3 rounded-full bg-pastel-lavender-start hover:bg-primary-container text-primary hover:text-on-primary font-label-md text-label-md transition-all flex items-center justify-center gap-2" onclick="openModal('Lolos Pendanaan PKM Riset', 'Akademik Riset')">
<span class="material-symbols-outlined text-[18px]">verified</span>
            Ajukan Bukti Partisipasi
          </button>
</div>
</div>
<!-- Card 5 -->
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-4">
<div class="flex items-start justify-between gap-3">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">volunteer_activism</span>
              Sosial &amp; Pengabdian
            </span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">bolt</span>
              +250 XP
            </span>
</div>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">Social Warrior</span>
<span class="font-body-sm text-body-sm text-text-muted">• 40 Jam Pengabdian</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">Volunteer Bakti Sosial Desa Binaan</h3>
<p class="font-body-md text-body-md text-text-muted line-clamp-2">Pemberdayaan literasi digital dan perbaikan fasilitas umum di desa binaan kemahasiswaan.</p>
</div>
</div>
<div class="pt-6 mt-6 flex flex-col gap-4">
<div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span>Deadline: 12 Okt 2025</span>
</div>
<span class="text-badge-emerald font-semibold">Tersedia 15 Kursi</span>
</div>
<button class="w-full py-3 rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-md text-label-md shadow-sm hover:opacity-95 transition-all flex items-center justify-center gap-2" onclick="takeQuest('Volunteer Bakti Sosial Desa Binaan')">
<span class="material-symbols-outlined text-[18px]">handshake</span>
            Ambil Quest
          </button>
</div>
</div>
<!-- Card 6 -->
<div class="bg-surface-card rounded-[20px] p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-4">
<div class="flex items-start justify-between gap-3">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-badge-gold/20 text-amber-700 font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">emoji_events</span>
              Kompetisi
            </span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md font-bold">
<span class="material-symbols-outlined text-[16px]">bolt</span>
              +500 XP
            </span>
</div>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-text-muted font-label-sm text-label-sm">Prestasi</span>
<span class="font-body-sm text-body-sm text-text-muted">• Juara 1 Nasional</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary group-hover:text-primary transition-colors">Juara 1 UI/UX Design Competition</h3>
<p class="font-body-md text-body-md text-text-muted line-clamp-2">Perolehan penghargaan utama dalam lomba perancangan antarmuka pengguna se-Indonesia.</p>
</div>
</div>
<div class="pt-6 mt-6 flex flex-col gap-4">
<div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span>Deadline: Sepanjang Semester</span>
</div>
<span class="text-badge-gold font-bold">Eksklusif</span>
</div>
<button class="w-full py-3 rounded-full bg-pastel-lavender-start hover:bg-primary-container text-primary hover:text-on-primary font-label-md text-label-md transition-all flex items-center justify-center gap-2" onclick="openModal('Juara 1 UI/UX Design Competition', 'Kompetisi Prestasi')">
<span class="material-symbols-outlined text-[18px]">emoji_events</span>
            Ajukan Bukti Partisipasi
          </button>
</div>
</div>
</div>
<!-- Micro Interaction Feedback Banner / Notification Bottom -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300 pointer-events-none" id="toastSuccess">
<div class="bg-surface-card rounded-[18px] p-4 shadow-xl flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-badge-emerald/20 text-badge-emerald flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">check</span>
</div>
<div class="flex flex-col">
<p class="font-label-md text-label-md text-text-primary font-bold" id="toastTitle">Misi Berhasil Diambil!</p>
<p class="font-body-sm text-body-sm text-text-muted" id="toastDesc">Tenggat waktu pengerjaan otomatis ditambahkan ke kalendermu.</p>
</div>
</div>
</div>
</div>
<!-- Modal: Ajukan Bukti Partisipasi (Epic 1 Nayla) -->
<div class="fixed inset-0 z-50 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 flex items-center justify-center p-4" id="evidenceModal">
<div class="bg-surface-card rounded-[28px] max-w-xl w-full p-8 shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col gap-6 max-h-[921px] overflow-y-auto">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">verified</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-text-primary">Ajukan Bukti Partisipasi</h3>
<p class="font-body-sm text-body-sm text-text-muted" id="modalCategoryTag">Kategori: Akademik • Epic 1 Nayla</p>
</div>
</div>
<button class="w-10 h-10 rounded-full hover:bg-surface-sidebar flex items-center justify-center text-text-muted transition-colors" onclick="closeModal()">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<div class="p-4 rounded-[16px] bg-pastel-lavender-start/50 flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">info</span>
<div class="font-body-sm text-body-sm text-text-muted leading-relaxed">
<strong class="text-text-primary font-semibold">Verifikasi SKPI Resmi:</strong> Setiap dokumen yang kamu unggah akan diperiksa oleh Tim Dosen Verifikator dalam kurun waktu 1-3 hari kerja sebelum XP dicairkan.
        </div>
</div>
<form class="flex flex-col gap-5" id="evidenceForm" onsubmit="handleFormSubmit(event)">
<div>
<label class="block font-label-md text-label-md text-text-primary mb-2">Nama Kegiatan / Quest Terpilih</label>
<input class="w-full px-4 py-3 bg-surface-sidebar text-text-primary rounded-xl font-body-md text-body-md outline-none cursor-not-allowed" id="modalQuestName" readonly="" type="text"/>
</div>
<div>
<label class="block font-label-md text-label-md text-text-primary mb-2">Unggah Berkas Pendukung (Dropzone)</label>
<div class="border-2 border-dashed border-border-subtle hover:border-primary-container rounded-[20px] p-6 text-center cursor-pointer transition-colors bg-pastel-lavender-start/20 flex flex-col items-center justify-center gap-2 group">
<div class="w-12 h-12 rounded-full bg-surface-card group-hover:bg-pastel-lavender-start text-primary flex items-center justify-center shadow-sm transition-colors">
<span class="material-symbols-outlined text-[24px]">cloud_upload</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-text-primary">Tarik file ke sini, atau <span class="text-primary underline">telusuri</span></span>
<span class="font-body-sm text-body-sm text-text-muted">Mendukung file PDF, JPG, PNG hingga ukuran maksimal 5MB</span>
</div>
<input accept=".pdf,.jpg,.jpeg,.png" class="hidden" type="file"/>
</div>
</div>
<div>
<label class="block font-label-md text-label-md text-text-primary mb-2">URL Tautan Sertifikat / Repository / Media</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-text-muted text-[18px]">link</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low focus:bg-surface-card rounded-xl font-body-md text-body-md outline-none focus:ring-2 focus:ring-primary-container transition-all" placeholder="https://drive.google.com/... atau publikasi resmi" type="url"/>
</div>
</div>
<div>
<label class="block font-label-md text-label-md text-text-primary mb-2">Keterangan Tambahan / Refleksi Peran</label>
<textarea class="w-full p-4 bg-surface-container-low focus:bg-surface-card rounded-xl font-body-md text-body-md outline-none focus:ring-2 focus:ring-primary-container transition-all" placeholder="Tuliskan peran spesifikmu, capaian kontribusi, atau nomor surat tugas jika ada..." rows="3"></textarea>
</div>
<div class="flex items-center justify-end gap-3 pt-3">
<button class="px-6 py-2.5 rounded-full hover:bg-surface-sidebar text-text-muted font-label-md text-label-md transition-colors" onclick="closeModal()" type="button">
            Batalkan
          </button>
<button class="px-6 py-2.5 rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-md text-label-md shadow-md hover:opacity-95 transition-all flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-[18px]">send</span>
            Kirim untuk Verifikasi
          </button>
</div>
</form>
</div>
</div>
<script>
    function openModal(questTitle, category) {
      const modal = document.getElementById('evidenceModal');
      const input = document.getElementById('modalQuestName');
      const tag = document.getElementById('modalCategoryTag');
      
      input.value = questTitle;
      tag.innerHTML = `Kategori: ${category} &bull; Validasi Portofolio Nayla`;
      
      modal.classList.remove('opacity-0', 'pointer-events-none');
      const dialog = modal.querySelector('div');
      dialog.classList.remove('scale-95');
      dialog.classList.add('scale-100');
    }

    function closeModal() {
      const modal = document.getElementById('evidenceModal');
      const dialog = modal.querySelector('div');
      
      dialog.classList.remove('scale-100');
      dialog.classList.add('scale-95');
      modal.classList.add('opacity-0', 'pointer-events-none');
    }

    function showToast(title, desc) {
      const toast = document.getElementById('toastSuccess');
      document.getElementById('toastTitle').textContent = title;
      document.getElementById('toastDesc').textContent = desc;
      
      toast.classList.remove('translate-y-32', 'opacity-0', 'pointer-events-none');
      setTimeout(() => {
        toast.classList.add('translate-y-32', 'opacity-0', 'pointer-events-none');
      }, 4000);
    }

    function takeQuest(questName) {
      showToast('Quest Diambil!', `"${questName}" telah masuk ke daftar aktif dashboard kamu.`);
    }

    function handleFormSubmit(e) {
      e.preventDefault();
      closeModal();
      showToast('Bukti Terkirim!', 'Verifikator akan memvalidasi bukti Anda dalam 1-3 hari kerja.');
    }
  </script>
</div>
@endsection
