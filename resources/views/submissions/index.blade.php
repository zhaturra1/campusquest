@extends('layouts.app')

@section('title', 'Form Pengajuan Misi & Unggah Bukti | CampusQuest')

@section('content')
@php
    $firstMission = $missions->first();
@endphp

<div class="flex flex-col w-full pb-16">
    <div class="mb-8">
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 mb-3">
            <a class="font-body-sm text-body-sm text-text-muted hover:text-primary transition-colors flex items-center gap-1" href="{{ route('missions.index') }}">
                <span class="material-symbols-outlined text-[16px]" aria-hidden="true">explore</span>
                <span>Katalog Quest</span>
            </a>
            <span class="material-symbols-outlined text-[14px] text-outline-variant" aria-hidden="true">chevron_right</span>
            <span class="font-label-md text-label-md text-primary font-semibold">Pengajuan Bukti Kegiatan</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="font-headline-lg text-headline-lg text-text-primary tracking-tight">Ajukan Bukti Capaian Misi</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mt-1 max-w-3xl">
                    Unggah dokumen pendukung resmi (sertifikat, SK kepanitiaan, atau publikasi ilmiah) untuk divalidasi oleh verifikator kemahasiswaan dan klaim XP Anda.
                </p>
            </div>
            <div class="flex items-center gap-2 self-start md:self-auto px-3.5 py-1.5 rounded-full bg-pastel-lavender-start text-primary">
                <span class="material-symbols-outlined text-[18px]" aria-hidden="true">verified_user</span>
                <span class="font-label-md text-label-md">PIC Epic 1: Nayla Assyifa</span>
            </div>
        </div>

        @if(session('success'))
            <div role="alert" class="mt-5 p-4 rounded-2xl bg-badge-emerald/15 border border-badge-emerald/30 text-badge-emerald font-label-md text-label-md flex items-center gap-3">
                <span class="material-symbols-outlined text-[20px]" aria-hidden="true">check_circle</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div role="alert" class="mt-5 p-4 rounded-2xl bg-error-container text-on-error-container font-body-sm text-body-sm">
                <p class="font-bold mb-1">Terdapat kesalahan pada isian formulir:</p>
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <form action="{{ route('submissions.store') }}" method="POST" id="submissionMainForm" class="lg:col-span-8 flex flex-col gap-8">
            @csrf
            <section class="bg-surface-card p-6 sm:p-7 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-6">
                <div class="flex items-center justify-between pb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center font-bold">1</span>
                        <div>
                            <h2 class="font-headline-sm text-headline-sm text-text-primary">Pemilihan Mahasiswa &amp; Misi</h2>
                            <p class="font-body-sm text-body-sm text-text-muted">Pilih identitas anggota Kelompok 5 dan misi terdaftar</p>
                        </div>
                    </div>
                    <span class="font-label-sm text-label-sm px-3 py-1 rounded-full bg-pastel-lavender-start text-primary uppercase font-bold tracking-wider">Tahap 1 / 3</span>
                </div>

                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2">
                        <label class="font-label-md text-label-md text-text-primary font-semibold" for="select-student">Mahasiswa Pengaju (Kelompok 5) <span class="text-error">*</span></label>
                        <div class="relative">
                            <select name="user_id" id="select-student" class="w-full appearance-none px-4 py-3.5 pr-10 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all cursor-pointer" required>
                                @foreach($students as $stu)
                                    <option value="{{ $stu->id }}" {{ $stu->nim === '103032400078' ? 'selected' : '' }}>
                                        {{ $stu->name }} (NIM: {{ $stu->nim }} - {{ $stu->faculty }})
                                    </option>
                                @endforeach
                            </select>
                            <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[20px]" aria-hidden="true">expand_more</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <label class="font-label-md text-label-md text-text-primary font-semibold" for="select-quest">Misi / Quest Terdaftar <span class="text-error">*</span></label>
                            <span id="selectedCategoryBadge" class="font-label-sm text-label-sm px-2.5 py-0.5 rounded-full bg-[#EBF5FB] text-badge-sky font-semibold">{{ $firstMission->category ?? 'Akademik' }}</span>
                        </div>
                        <div class="relative">
                            <select name="mission_id" id="select-quest" onchange="updateSelectedQuestMeta(this)" class="w-full appearance-none px-4 py-3.5 pr-10 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all cursor-pointer" required>
                                @foreach($missions as $mission)
                                    <option value="{{ $mission->id }}" data-xp="{{ $mission->xp_reward }}" data-category="{{ $mission->category }}" data-title="{{ $mission->title }}">
                                        {{ $mission->title }} • [+{{ $mission->xp_reward }} XP]
                                    </option>
                                @endforeach
                            </select>
                            <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-[20px]" aria-hidden="true">expand_more</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 pt-1">
                        <span class="font-label-md text-label-md text-text-primary font-semibold">Peran Partisipasi Mahasiswa</span>
                        <div class="flex flex-wrap gap-2 pt-1" id="role-container" role="group" aria-label="Pilih Peran Mahasiswa">
                            <button class="role-btn px-3.5 py-2 min-h-[40px] rounded-full font-label-md text-label-md transition-all bg-primary-container text-on-primary-container shadow-sm" data-role="Ketua Tim" type="button">
                                Ketua Tim
                            </button>
                            <button class="role-btn px-3.5 py-2 min-h-[40px] rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary" data-role="Anggota Inti" type="button">
                                Anggota Inti
                            </button>
                            <button class="role-btn px-3.5 py-2 min-h-[40px] rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary" data-role="Peserta / Individu" type="button">
                                Peserta / Individu
                            </button>
                            <button class="role-btn px-3.5 py-2 min-h-[40px] rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary" data-role="Panitia Pelaksana" type="button">
                                Panitia Pelaksana
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-surface-card p-6 sm:p-7 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-6">
                <div class="flex items-center justify-between pb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center font-bold">2</span>
                        <div>
                            <h2 class="font-headline-sm text-headline-sm text-text-primary">Unggah Berkas &amp; Bukti Pendukung</h2>
                            <p class="font-body-sm text-body-sm text-text-muted">Pilih file bukti sertifikat atau SK kepanitiaan dari perangkat Anda</p>
                        </div>
                    </div>
                    <span class="font-label-sm text-label-sm px-3 py-1 rounded-full bg-pastel-lavender-start text-primary uppercase font-bold tracking-wider">Tahap 2 / 3</span>
                </div>

                <label for="fileUploadInput" class="group relative rounded-[20px] bg-gradient-to-b from-pastel-lavender-start/60 to-surface-container-low/50 p-8 flex flex-col items-center justify-center text-center transition-all hover:bg-pastel-lavender-start cursor-pointer border-2 border-dashed border-border-subtle">
                    <div class="w-16 h-16 rounded-full bg-surface-card text-primary flex items-center justify-center shadow-md mb-4 group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-[32px]" aria-hidden="true">cloud_upload</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-text-primary">Pilih berkas bukti sertifikat atau surat tugas</h3>
                    <p class="font-body-md text-body-md text-text-muted mt-1">Klik area ini untuk memilih file PDF, JPG, atau PNG (Maks. 5 MB)</p>
                    <input id="fileUploadInput" accept=".pdf,.png,.jpg,.jpeg" class="sr-only" type="file" onchange="handleFileSelected(this)"/>
                </label>

                <div class="flex flex-col gap-2">
                    <label for="proofFileNameInput" class="font-label-md text-label-md text-text-primary font-semibold">Nama Berkas Terlampir <span class="text-error">*</span></label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3.5 text-error text-[20px]" aria-hidden="true">picture_as_pdf</span>
                        <input id="proofFileNameInput" name="proof_file_name" value="Sertifikat_Kegiatan_Nayla_TelU.pdf" required class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all" type="text"/>
                    </div>
                </div>
            </section>

            <section class="bg-surface-card p-6 sm:p-7 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-6">
                <div class="flex items-center justify-between pb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm flex items-center justify-center font-bold">3</span>
                        <div>
                            <h2 class="font-headline-sm text-headline-sm text-text-primary">Catatan &amp; Refleksi Pembelajaran</h2>
                            <p class="font-body-sm text-body-sm text-text-muted">Keterangan pembagian peran atau pengantar kepada verifikator</p>
                        </div>
                    </div>
                    <span class="font-label-sm text-label-sm px-3 py-1 rounded-full bg-pastel-lavender-start text-primary uppercase font-bold tracking-wider">Tahap 3 / 3</span>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-label-md text-label-md text-text-primary font-semibold" for="input-notes">Catatan Verifikator &amp; Ringkasan Kontribusi</label>
                    <textarea name="notes" class="w-full p-4 rounded-xl bg-surface-container-low font-body-md text-body-md text-text-primary focus:bg-surface-card focus:ring-2 focus:ring-primary transition-all resize-y placeholder:text-text-muted" id="input-notes" placeholder="Tuliskan peran spesifik Anda dalam kegiatan atau nomor surat tugas..." rows="4" required>Berpartisipasi aktif sebagai Ketua Tim pada kegiatan akademik Telkom University dan melampirkan sertifikat resmi.</textarea>
                </div>
                <div class="p-4 rounded-xl bg-pastel-lavender-start/40 flex items-start gap-3">
                    <input checked required class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary-container accent-primary-container cursor-pointer" id="honor-code" type="checkbox"/>
                    <label class="font-body-sm text-body-sm text-text-primary cursor-pointer" for="honor-code">
                        Saya menyatakan bahwa bukti kegiatan yang diunggah adalah asli, sah, dan sesuai dengan Kode Etik Akademik Mahasiswa Telkom University.
                    </label>
                </div>
            </section>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                <a href="{{ route('missions.index') }}" class="w-full sm:w-auto px-6 py-3 min-h-[44px] rounded-full bg-surface-card hover:bg-pastel-lavender-start text-text-primary font-label-lg text-label-lg transition-all shadow-sm inline-flex items-center justify-center">
                    Kembali ke Katalog
                </a>
                <button class="w-full sm:w-auto px-8 py-3.5 min-h-[44px] rounded-full bg-gradient-to-r from-primary-container to-secondary text-on-primary font-label-lg text-label-lg shadow-[0_4px_14px_rgba(108,92,231,0.3)] hover:opacity-95 transition-all flex items-center justify-center gap-2.5" id="submit-btn" type="submit">
                    <span class="material-symbols-outlined text-[20px]" aria-hidden="true">send</span>
                    <span id="submitBtnText">Kirim Pengajuan Misi (+{{ $firstMission->xp_reward ?? 150 }} XP)</span>
                </button>
            </div>
        </form>

        <div class="lg:col-span-4 flex flex-col gap-6">
            <div class="bg-surface-card p-6 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] relative overflow-hidden">
                <div class="flex items-center justify-between mb-4">
                    <span class="font-label-md text-label-md text-text-muted uppercase tracking-wider">Estimasi Hadiah Misi</span>
                    <span class="px-2.5 py-1 rounded-full bg-badge-emerald/10 text-badge-emerald font-label-sm text-label-sm font-semibold flex items-center gap-1">
                        <span class="material-symbols-outlined text-[12px]" aria-hidden="true">verified</span> Terdaftar
                    </span>
                </div>
                <div class="p-5 rounded-2xl bg-gradient-to-br from-pastel-lavender-start via-surface-card to-pastel-lavender-end flex items-center justify-between mb-4 shadow-xs">
                    <div>
                        <p class="font-headline-xl text-headline-xl text-primary font-bold tracking-tight leading-none" id="rewardXpDisplay">+{{ $firstMission->xp_reward ?? 150 }} <span class="font-headline-sm text-headline-sm">XP</span></p>
                        <p class="font-body-sm text-body-sm text-text-muted mt-1" id="rewardTitleDisplay">{{ $firstMission->title ?? 'Misi Kampus' }}</p>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-primary-container text-on-primary-container flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-[30px]" aria-hidden="true">military_tech</span>
                    </div>
                </div>
                <p class="font-body-sm text-body-sm text-text-muted">
                    Poin XP akan otomatis ditambahkan ke akun mahasiswa segera setelah disetujui pada <a href="{{ route('admin.submissions') }}" class="text-primary font-semibold hover:underline">Panel Verifikator</a>.
                </p>
            </div>

            <div class="bg-surface-card p-6 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]" aria-hidden="true">history</span>
                        </div>
                        <div>
                            <h3 class="font-headline-sm text-headline-sm text-text-primary">Riwayat Pengajuan</h3>
                            <p class="font-body-sm text-body-sm text-text-muted">Data langsung dari tabel submissions</p>
                        </div>
                    </div>
                    <span class="px-2.5 py-0.5 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">{{ $submissions->count() }} Data</span>
                </div>

                <div class="flex flex-col gap-3 mt-1">
                    @forelse($submissions->take(5) as $sub)
                        <div class="p-3.5 rounded-2xl bg-surface-container-low/80 flex flex-col gap-1.5">
                            <div class="flex items-center justify-between gap-2">
                                <span class="font-label-md text-label-md text-text-primary font-bold truncate">{{ $sub->user->name ?? 'Mahasiswa' }}</span>
                                <span class="px-2.5 py-0.5 rounded-full font-label-sm text-label-sm font-semibold {{ $sub->status === 'Disetujui' ? 'bg-badge-emerald text-on-primary' : ($sub->status === 'Ditolak' ? 'bg-error-container text-on-error-container' : 'bg-pastel-lavender-start text-primary') }}">
                                    {{ $sub->status }}
                                </span>
                            </div>
                            <p class="font-body-sm text-body-sm text-text-primary truncate">{{ $sub->mission->title ?? 'Misi Kampus' }}</p>
                            <div class="flex items-center justify-between text-text-muted font-body-sm text-body-sm text-[11px]">
                                <span class="truncate">{{ $sub->proof_file }}</span>
                                <span class="font-semibold text-primary shrink-0">+{{ $sub->mission->xp_reward ?? 0 }} XP</span>
                            </div>
                        </div>
                    @empty
                        <div class="p-6 text-center text-text-muted font-body-sm text-body-sm bg-surface-container-low rounded-2xl">
                            Belum ada pengajuan misi yang tercatat.
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="bg-surface-card p-6 rounded-[24px] shadow-[0_4px_20px_-2px_rgba(108,92,231,0.04)] flex flex-col gap-4">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-full bg-pastel-lavender-start text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]" aria-hidden="true">checklist</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-text-primary">Ketentuan Berkas</h3>
                        <p class="font-body-sm text-body-sm text-text-muted">Pastikan dokumen memenuhi standar</p>
                    </div>
                </div>
                <ul class="flex flex-col gap-2.5">
                    <li class="flex items-start gap-2.5 font-body-sm text-body-sm text-text-primary">
                        <span class="material-symbols-outlined text-badge-emerald text-[18px] mt-0.5 shrink-0" aria-hidden="true">check_circle</span>
                        <span><strong>Nama &amp; NIM Sesuai:</strong> Identitas pada bukti kegiatan sesuai dengan profil mahasiswa Kelompok 5.</span>
                    </li>
                    <li class="flex items-start gap-2.5 font-body-sm text-body-sm text-text-primary">
                        <span class="material-symbols-outlined text-badge-emerald text-[18px] mt-0.5 shrink-0" aria-hidden="true">check_circle</span>
                        <span><strong>Dokumen Terbaca Jelas:</strong> Sertifikat atau surat tugas tidak buram dan mencantumkan nama kegiatan.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function updateSelectedQuestMeta(selectEl) {
        const option = selectEl.options[selectEl.selectedIndex];
        const xp = option.getAttribute('data-xp') || '150';
        const cat = option.getAttribute('data-category') || 'Akademik';
        const title = option.getAttribute('data-title') || 'Misi Kampus';

        document.getElementById('selectedCategoryBadge').textContent = cat;
        document.getElementById('rewardXpDisplay').innerHTML = '+' + xp + ' <span class="font-headline-sm text-headline-sm">XP</span>';
        document.getElementById('rewardTitleDisplay').textContent = title;
        document.getElementById('submitBtnText').textContent = 'Kirim Pengajuan Misi (+' + xp + ' XP)';
    }

    function handleFileSelected(inputEl) {
        if (inputEl.files && inputEl.files[0]) {
            document.getElementById('proofFileNameInput').value = inputEl.files[0].name;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const roleButtons = document.querySelectorAll('.role-btn');
        roleButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                roleButtons.forEach(b => {
                    b.className = 'role-btn px-3.5 py-2 min-h-[40px] rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-pastel-lavender-start hover:text-primary';
                });
                this.className = 'role-btn px-3.5 py-2 min-h-[40px] rounded-full font-label-md text-label-md transition-all bg-primary-container text-on-primary-container shadow-sm';
            });
        });

        const form = document.getElementById('submissionMainForm');
        const submitBtn = document.getElementById('submit-btn');
        if (form && submitBtn) {
            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                document.getElementById('submitBtnText').textContent = 'Mengirim Pengajuan...';
            });
        }
    });
</script>
@endsection
