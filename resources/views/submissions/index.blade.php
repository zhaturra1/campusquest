@extends('layouts.app')

@section('title', 'Form Pengajuan Misi & Unggah Bukti — CampusQuest')

@section('content')
<!-- EPIC 1 (FE Mahasiswa): Manajemen Pengajuan Misi (PIC: Nayla Assyifa - 103032400078) -->
<div class="flex flex-col w-full pb-16">
<!-- Header & Breadcrumbs Context -->
<div class="mb-8">
<nav aria-label="Breadcrumb" class="flex items-center gap-2 mb-3">
<a class="font-body-sm text-body-sm text-text-muted hover:text-primary transition-colors flex items-center gap-1" href="#">
<span class="material-symbols-outlined text-[16px]">explore</span>
<span>Katalog Quest</span>
</a>
<span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
<span class="font-label-md text-label-md text-primary font-semibold">Pengajuan Bukti Kegiatan</span>
</nav>
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h1 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">Ajukan Bukti Capaian Misi</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-1 max-w-3xl">
          Unggah dokumen pendukung resmi (sertifikat, SK kepanitiaan, atau publikasi ilmiah) untuk divalidasi oleh verifikator akademik BAAK dan klaim XP Anda.
        </p>
</div>
<div class="flex items-center gap-2 self-start md:self-auto px-3.5 py-1.5 rounded-full bg-pastel-lavender-start text-primary">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
<span class="font-label-md text-label-md">Sistem Validasi BAAK v2.4</span>
</div>
</div>
<!-- Soft SLA Callout -->
<div class="mt-5 p-4 rounded-2xl bg-gradient-to-r from-pastel-lavender-start via-pastel-lavender-end to-surface-card flex items-center justify-between shadow-sm">
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-full bg-surface-card flex items-center justify-center text-primary shadow-sm flex-shrink-0">
<span class="material-symbols-outlined text-[20px]">schedule</span>
</div>
<div>
<p class="font-label-md text-label-md text-text-primary">Komitmen SLA Peninjauan Cepat</p>
<p class="font-body-sm text-body-sm text-text-muted">Setiap berkas akan divalidasi dalam waktu maksimal 1x24 jam kerja sesuai standar layanan BAAK Kampus Merdeka.</p>
</div>
</div>
<span class="hidden sm:inline-flex px-3 py-1 rounded-full bg-badge-emerald/10 text-badge-emerald font-label-md text-label-md font-semibold">
        Layanan Aktif
      </span>
</div>
</div>
<!-- Main Grid (8 Col Form + 4 Col Summary/Checklist) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Left Column: Form Pengajuan (8 Cols) -->
<div class="lg:col-span-8 flex flex-col gap-8">
<!-- STEP 1: QUEST CATEGORY & IDENTITY -->
<section class="bg-surface-card p-7 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-6">
<div class="flex items-center justify-between pb-3">
<div class="flex items-center gap-3">
<span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center font-bold">1</span>
<div>
<h2 class="font-headline-sm text-headline-sm text-text-primary">Pemilihan Misi &amp; Kategori</h2>
<p class="font-body-sm text-body-sm text-text-muted">Pilih misi terdaftar dan cantumkan spesifikasi prestasi</p>
</div>
</div>
<span class="font-label-sm text-label-sm px-3 py-1 rounded-full bg-pastel-lavender-start text-primary uppercase font-bold tracking-wider">Tahap 1 / 3</span>
</div>
<div class="flex flex-col gap-5">
<!-- Dropdown Quest Induk -->
<div class="flex flex-col gap-2">
<div class="flex justify-between items-center">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="select-quest">Misi / Quest Terdaftar <span class="text-error">*</span></label>
<span class="font-label-sm text-label-sm px-2.5 py-0.5 rounded-full bg-[#EBF5FB] text-badge-sky font-semibold">Kompetisi &amp; Hackathon</span>
</div>
<div class="relative">
<select class="w-full appearance-none px-4 py-3.5 pr-10 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all cursor-pointer" id="select-quest">
<option selected="">Juara Lomba / Kompetisi Nasional (Gemastik, PKM, dsb.) • [+600 XP]</option>
<option>Publikasi Jurnal SINTA / Scopus Mahasiswa • [+800 XP]</option>
<option>Ketua Acara / Panitia Inti Tingkat Universitas • [+400 XP]</option>
<option>Narasumber / Delegasi Konferensi Ilmiah Muda • [+350 XP]</option>
<option>HAKI / Pendaftaran Hak Cipta Karya Cipta • [+750 XP]</option>
</select>
<span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Input Judul Capaian -->
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="input-title">Judul Capaian / Nama Kegiatan Lengkap <span class="text-error">*</span></label>
<input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all placeholder:text-text-muted" id="input-title" placeholder="Contoh: Juara 2 National Student Innovation Championship 2025" type="text" value="Juara 2 National Student Innovation Championship 2025"/>
<p class="font-body-sm text-body-sm text-text-muted">Tuliskan persis seperti yang tertulis pada lembar sertifikat resmi.</p>
</div>
<!-- Tingkat & Penyelenggara -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="select-level">Tingkat Penyelenggaraan <span class="text-error">*</span></label>
<div class="relative">
<select class="w-full appearance-none px-4 py-3 pr-10 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all cursor-pointer" id="select-level">
<option selected="">Nasional (Puspresnas / Asosiasi Resmi)</option>
<option>Internasional (Min. 3 Negara Partisipan)</option>
<option>Regional / Wilayah LLDIKTI</option>
<option>Tingkat Universitas / Fakultas</option>
</select>
<span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[20px]">unfold_more</span>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="input-organizer">Penyelenggara Kegiatan <span class="text-error">*</span></label>
<input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all" id="input-organizer" placeholder="Contoh: Puspresnas / IEEE / Himpunan" type="text" value="Kemendikbudristek / Puspresnas &amp; IPB"/>
</div>
</div>
<!-- Tanggal & Peran -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-1">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="input-date">Tanggal Selesai / Penerbitan <span class="text-error">*</span></label>
<div class="relative">
<input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all" id="input-date" type="date" value="2025-02-18"/>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="font-label-md text-label-md text-text-primary font-semibold">Peran Mahasiswa <span class="text-error">*</span></span>
<!-- Role Pills Selection -->
<div class="flex flex-wrap gap-2 pt-1" id="role-container">
<button class="role-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md transition-all bg-primary-container text-on-primary-container shadow-sm" data-role="ketua" type="button">
                  Ketua Tim
                </button>
<button class="role-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary" data-role="anggota" type="button">
                  Anggota Inti
                </button>
<button class="role-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary" data-role="perorangan" type="button">
                  Perorangan (Individu)
                </button>
<button class="role-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary" data-role="pemakalah" type="button">
                  Pemakalah / Penulis
                </button>
</div>
</div>
</div>
</div>
</section>
<!-- STEP 2: UPLOAD BUKTI DOKUMEN -->
<section class="bg-surface-card p-7 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-6">
<div class="flex items-center justify-between pb-3">
<div class="flex items-center gap-3">
<span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center font-bold">2</span>
<div>
<h2 class="font-headline-sm text-headline-sm text-text-primary">Unggah Berkas &amp; Bukti Pendukung</h2>
<p class="font-body-sm text-body-sm text-text-muted">Pastikan stempel, nomor surat, dan barcode verifikasi tampak jelas</p>
</div>
</div>
<span class="font-label-sm text-label-sm px-3 py-1 rounded-full bg-pastel-lavender-start text-primary uppercase font-bold tracking-wider">Tahap 2 / 3</span>
</div>
<!-- Modern Soft Drag & Drop Area -->
<div class="group relative rounded-[20px] bg-gradient-to-b from-pastel-lavender-start/60 to-surface-container-low/50 p-8 flex flex-col items-center justify-center text-center transition-all hover:bg-pastel-lavender-start cursor-pointer">
<div class="w-16 h-16 rounded-full bg-surface-card text-primary flex items-center justify-center shadow-md mb-4 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[32px]">cloud_upload</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Tarik &amp; lepas file bukti di sini</h3>
<p class="font-body-md text-body-md text-text-muted mt-1">atau <span class="text-primary font-semibold hover:underline">klik untuk memilih file</span> dari penyimpanan komputer</p>
<div class="mt-4 flex items-center gap-2">
<span class="px-2.5 py-1 rounded-md bg-surface-card text-text-muted font-label-sm text-label-sm shadow-xs">PDF</span>
<span class="px-2.5 py-1 rounded-md bg-surface-card text-text-muted font-label-sm text-label-sm shadow-xs">JPG / JPEG</span>
<span class="px-2.5 py-1 rounded-md bg-surface-card text-text-muted font-label-sm text-label-sm shadow-xs">PNG</span>
<span class="font-body-sm text-body-sm text-text-muted ml-1">• Maks. 5 MB per berkas</span>
</div>
<input accept=".pdf,.png,.jpg,.jpeg" class="absolute inset-0 opacity-0 cursor-pointer" type="file"/>
</div>
<!-- Simulated Active Uploaded File Card -->
<div class="flex flex-col gap-3">
<span class="font-label-md text-label-md text-text-muted uppercase tracking-wider">Berkas Terlampir (1 File)</span>
<div class="p-4 rounded-2xl bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-center gap-3.5 min-w-0">
<div class="w-12 h-12 rounded-xl bg-error-container/40 text-error flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[26px]">picture_as_pdf</span>
</div>
<div class="min-w-0">
<div class="flex items-center gap-2">
<p class="font-label-md text-label-md text-text-primary truncate">Sertifikat_Juara2_Final.pdf</p>
<span class="px-2 py-0.5 rounded-full bg-badge-emerald/15 text-badge-emerald font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]">qr_code_scanner</span>
                    Barcode OK
                  </span>
</div>
<div class="flex items-center gap-2 mt-0.5">
<span class="font-body-sm text-body-sm text-text-muted">2.4 MB</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span class="font-body-sm text-body-sm text-badge-emerald font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">check_circle</span>
                    Siap divalidasi
                  </span>
</div>
</div>
</div>
<div class="flex items-center gap-2 self-end sm:self-center">
<button class="w-9 h-9 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary flex items-center justify-center shadow-xs transition-colors" title="Lihat Pratinjau" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
<button class="w-9 h-9 rounded-full bg-surface-card hover:bg-error-container text-error flex items-center justify-center shadow-xs transition-colors" title="Hapus Berkas" type="button">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</div>
</div>
<!-- Optional Online Links (Google Drive / GitHub / IEEE / Karya) -->
<div class="flex flex-col gap-2 pt-2">
<div class="flex items-center justify-between">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="input-link">Tautan Pendukung Tambahan (Opsional)</label>
<span class="font-body-sm text-body-sm text-text-muted">Google Drive, Prosiding, atau GitHub</span>
</div>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3.5 text-text-muted text-[20px]">link</span>
<input class="w-full pl-10 pr-4 py-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all placeholder:text-text-muted" id="input-link" placeholder="https://drive.google.com/..." type="url" value="https://drive.google.com/drive/folders/1aBcDeFgHiJkLmNoPqrStUvwX"/>
</div>
</div>
</section>
<!-- STEP 3: CATATAN & REFLEKSI PEMBELAJARAN -->
<section class="bg-surface-card p-7 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-6">
<div class="flex items-center justify-between pb-3">
<div class="flex items-center gap-3">
<span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center font-bold">3</span>
<div>
<h2 class="font-headline-sm text-headline-sm text-text-primary">Catatan &amp; Refleksi Pembelajaran</h2>
<p class="font-body-sm text-body-sm text-text-muted">Keterangan pembagian peran tim atau pengantar kepada verifikator</p>
</div>
</div>
<span class="font-label-sm text-label-sm px-3 py-1 rounded-full bg-pastel-lavender-start text-primary uppercase font-bold tracking-wider">Tahap 3 / 3</span>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary font-semibold" for="input-notes">Catatan Verifikator &amp; Ringkasan Kontribusi</label>
<textarea class="w-full p-4 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:shadow-[0_0_0_2px_#6C5CE7] outline-none transition-all resize-y placeholder:text-text-muted" id="input-notes" placeholder="Tuliskan peran spesifik Anda dalam tim (misal: Ketua Tim &amp; UI Lead), tautan video demonstrasi jika ada, atau informasi pendukung untuk mempercepat verifikasi BAAK..." rows="4">Saya bertindak sebagai Ketua Tim Pengembang aplikasi EduAccess bersama 2 rekan dari prodi Teknik Informatika (NIM: 2110512044 dan 2110512049). Karya berupa aplikasi inklusivitas kampus yang telah diujikan pada sesi pitching finalis nasional pada 18 Februari 2025.</textarea>
<div class="flex justify-between items-center mt-1">
<span class="font-body-sm text-body-sm text-text-muted">Maksimal 500 karakter</span>
<span class="font-label-sm text-label-sm text-text-muted">342 / 500</span>
</div>
</div>
<!-- Academic Honor Code Checkbox -->
<div class="p-4 rounded-xl bg-pastel-lavender-start/40 flex items-start gap-3">
<input checked="" class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary-container accent-primary-container cursor-pointer" id="honor-code" type="checkbox"/>
<label class="font-body-sm text-body-sm text-text-primary cursor-pointer" for="honor-code">
            Saya menyatakan dengan sungguh-sungguh bahwa bukti kegiatan yang diunggah adalah asli, sah, dan dapat dipertanggungjawabkan sesuai Kode Etik Akademik Mahasiswa.
          </label>
</div>
</section>
<!-- Action Buttons Row -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
<div class="flex items-center gap-3 w-full sm:w-auto">
<button class="w-full sm:w-auto px-6 py-3 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-lg text-label-lg transition-all shadow-sm" type="button">
            Batal
          </button>
<button class="w-full sm:w-auto px-6 py-3 rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-lg text-label-lg transition-all shadow-sm flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined text-[18px]">bookmark</span>
<span>Simpan sebagai Draf</span>
</button>
</div>
<button class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-lg text-label-lg shadow-[0_4px_14px_rgba(108,92,231,0.3)] hover:shadow-[0_6px_20px_rgba(108,92,231,0.4)] hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center justify-center gap-2.5" id="submit-btn" type="button">
<span class="material-symbols-outlined text-[20px]">send</span>
<span>Kirim Pengajuan Misi (+600 XP)</span>
</button>
</div>
</div>
<!-- Right Column: Reward Summary & Validation Checklist (4 Cols) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- CARD 1: Estimasi Perolehan Reward -->
<div class="bg-surface-card p-6 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] relative overflow-hidden">
<!-- Ambient decorative tint in top right -->
<div class="absolute -top-10 -right-10 w-32 h-32 rounded-full bg-gradient-to-br from-pastel-lavender-start to-pastel-lavender-end pointer-events-none blur-2xl"></div>
<div class="flex items-center justify-between mb-4">
<span class="font-label-md text-label-md text-text-muted uppercase tracking-wider">Estimasi Hadiah Misi</span>
<span class="px-2.5 py-1 rounded-full bg-badge-emerald/10 text-badge-emerald font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]">verified</span> Terverifikasi
          </span>
</div>
<!-- Big XP Callout -->
<div class="p-5 rounded-2xl bg-gradient-to-br from-pastel-lavender-start via-surface-card to-pastel-lavender-end flex items-center justify-between mb-5 shadow-xs">
<div>
<p class="font-headline-xl text-headline-xl text-primary font-bold tracking-tight leading-none">+600 <span class="font-headline-sm text-headline-sm">XP</span></p>
<p class="font-body-sm text-body-sm text-text-muted mt-1">Poin Aktivitas Akademik Kampus</p>
</div>
<div class="w-14 h-14 rounded-2xl bg-primary-container text-on-primary-container flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-[30px]">military_tech</span>
</div>
</div>
<!-- Progress Simulation -->
<div class="flex flex-col gap-2 mb-6">
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-text-primary">Progres Naik Level</span>
<span class="font-label-sm text-label-sm text-primary font-bold">+20% Lonjakan</span>
</div>
<div class="w-full h-3 rounded-full bg-surface-container overflow-hidden p-0.5">
<div class="h-full rounded-full bg-gradient-to-r from-primary-container to-secondary transition-all duration-700" style="width: 78%;"></div>
</div>
<div class="flex justify-between items-center text-text-muted font-body-sm text-body-sm">
<span>Level 3 (2,450 XP)</span>
<span class="text-primary font-semibold">Level 4 • Honors (3,050 XP)</span>
</div>
</div>
<!-- Unlocked Badge Preview -->
<div class="pt-4 flex flex-col gap-3">
<span class="font-label-md text-label-md text-text-muted uppercase tracking-wider">Peluang Lencana Baru</span>
<div class="flex items-center gap-3.5 p-3 rounded-2xl bg-surface-container-low hover:bg-pastel-lavender-start/50 transition-colors">
<div class="relative flex-shrink-0">
<div class="w-12 h-12 rounded-full bg-[#FEF9E7] text-[#B7950B] flex items-center justify-center shadow-xs">
<span class="material-symbols-outlined text-[24px]">emoji_events</span>
</div>
<span class="absolute -bottom-1 -right-1 w-4 h-4 rounded-full bg-badge-emerald flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined text-[10px]">lock_open</span>
</span>
</div>
<div>
<div class="flex items-center gap-1.5">
<p class="font-label-md text-label-md text-text-primary">National Competitor</p>
<span class="px-1.5 py-0.2 rounded bg-badge-gold/20 text-[#9A7D0A] font-label-sm text-label-sm font-bold">Tier Gold</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted line-clamp-1">Terbuka otomatis setelah verifikasi BAAK</p>
</div>
</div>
</div>
</div>
<!-- CARD 2: Checklist Validasi Cepat -->
<div class="bg-surface-card p-6 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-4">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">checklist</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Tips Lolos Verifikasi</h3>
<p class="font-body-sm text-body-sm text-text-muted">Cegah berkas ditolak atau dikembalikan verifikator</p>
</div>
</div>
<ul class="flex flex-col gap-3 mt-1">
<li class="flex items-start gap-3 p-2.5 rounded-xl bg-surface-container-low/70">
<span class="material-symbols-outlined text-badge-emerald text-[18px] mt-0.5 flex-shrink-0">check_circle</span>
<span class="font-body-sm text-body-sm text-text-primary">
<strong class="font-semibold text-text-primary">Nama &amp; NIM Sesuai:</strong> Pastikan nama tertera identik dengan profil SIAKAD Kampus Merdeka.
            </span>
</li>
<li class="flex items-start gap-3 p-2.5 rounded-xl bg-surface-container-low/70">
<span class="material-symbols-outlined text-badge-emerald text-[18px] mt-0.5 flex-shrink-0">check_circle</span>
<span class="font-body-sm text-body-sm text-text-primary">
<strong class="font-semibold text-text-primary">Tanda Tangan &amp; Barcode:</strong> Terdapat tanda tangan penyelenggara resmi, stempel basah, atau QR verifikasi URL.
            </span>
</li>
<li class="flex items-start gap-3 p-2.5 rounded-xl bg-surface-container-low/70">
<span class="material-symbols-outlined text-badge-emerald text-[18px] mt-0.5 flex-shrink-0">check_circle</span>
<span class="font-body-sm text-body-sm text-text-primary">
<strong class="font-semibold text-text-primary">Kualitas Dokumen:</strong> Resolusi file minimal 300 DPI, tidak buram, dan tidak terpotong pada bagian tepi teks.
            </span>
</li>
<li class="flex items-start gap-3 p-2.5 rounded-xl bg-surface-container-low/70">
<span class="material-symbols-outlined text-badge-emerald text-[18px] mt-0.5 flex-shrink-0">check_circle</span>
<span class="font-body-sm text-body-sm text-text-primary">
<strong class="font-semibold text-text-primary">Kategori Tim:</strong> Jika pengerjaan kelompok, pastikan SK kepanitiaan / lampiran tim memuat nama Anda.
            </span>
</li>
</ul>
</div>
<!-- CARD 3: Bantuan Verifikator / FAQ BAAK -->
<div class="bg-gradient-to-br from-pastel-lavender-start to-pastel-lavender-end p-6 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-3">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-surface-card text-primary flex items-center justify-center shadow-xs">
<span class="material-symbols-outlined text-[20px]">support_agent</span>
</div>
<div>
<h4 class="font-label-lg text-label-lg text-text-primary">Butuh Panduan Konversi?</h4>
<p class="font-body-sm text-body-sm text-text-muted">Meja Layanan BAAK Gedung Rektorat Lt. 2</p>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
          Jika kegiatan lomba Anda belum terdaftar pada opsi quest standar atau merupakan hibah internasional, hubungi PIC Kemahasiswaan prodi.
        </p>
<div class="pt-1 flex items-center justify-between">
<a class="font-label-md text-label-md text-primary font-semibold hover:underline flex items-center gap-1" href="#">
<span>Baca FAQ Rekognisi SKS</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<span class="font-body-sm text-body-sm text-text-muted">WhatsApp: +62 811-2345-BAAK</span>
</div>
</div>
</div>
</div>
</div>
<script>
  // Simple Pill Selection Micro-interaction for Student Role
  document.addEventListener('DOMContentLoaded', function() {
    const roleButtons = document.querySelectorAll('.role-btn');
    roleButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        roleButtons.forEach(b => {
          b.className = 'role-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary';
        });
        this.className = 'role-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md transition-all bg-primary-container text-on-primary-container shadow-sm';
      });
    });

    // Submit button feedback
    const submitBtn = document.getElementById('submit-btn');
    if (submitBtn) {
      submitBtn.addEventListener('click', function() {
        const originalContent = this.innerHTML;
        this.innerHTML = '<span class="material-symbols-outlined text-[20px] animate-spin">refresh</span><span>Mengirim Dokumen...</span>';
        this.disabled = true;
        setTimeout(() => {
          this.innerHTML = '<span class="material-symbols-outlined text-[20px]">check</span><span>Pengajuan Berhasil Dikirim!</span>';
          this.classList.remove('from-primary-container', 'to-secondary');
          this.classList.add('bg-badge-emerald');
        }, 1200);
      });
    }
  });
</script>
@endsection
