@extends('layouts.app')

@section('title', 'Leaderboard Kampus — CampusQuest')

@section('content')
<!-- EPIC 3: Leaderboard & Peringkat (PIC: Nur Syadira - 103032400123) -->
<div class="flex flex-col w-full gap-8">
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
<div class="space-y-1">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-md text-label-md">
<span class="material-symbols-outlined text-[16px]">military_tech</span>
<span>Musim Kompetisi Akademik 2024/2025</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-text-primary tracking-tight">Papan Peringkat Kampus (Leaderboard)</h1>
<p class="font-body-lg text-body-lg text-text-muted">Kompetisi sehat mahasiswa dalam mengumpulkan XP keaktifan, riset, dan pencapaian akademik terverifikasi.</p>
</div>
<div class="flex items-center gap-3">
<div class="flex items-center gap-2 bg-surface-card px-4 py-2 rounded-full shadow-sm text-text-muted font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[18px] text-badge-emerald">sync</span>
<span>Diperbarui 5 menit yang lalu</span>
</div>
<button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-badge-violet transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">share</span>
<span>Bagikan Peringkat</span>
</button>
</div>
</div>
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-card p-2.5 rounded-[22px] shadow-sm">
<div class="flex flex-wrap items-center gap-1.5 p-1 bg-surface-sidebar rounded-full" id="scope-tabs">
<button class="scope-btn active px-5 py-2 rounded-full font-label-lg text-label-lg transition-all bg-primary-container text-on-primary-container shadow-sm" data-scope="univ">
        Top Universitas (All Campus)
      </button>
<button class="scope-btn px-5 py-2 rounded-full font-label-lg text-label-lg text-on-surface-variant hover:text-primary hover:bg-pastel-lavender-start transition-all" data-scope="fakultas">
        Top Fakultas (Ilmu Komputer)
      </button>
<button class="scope-btn px-5 py-2 rounded-full font-label-lg text-label-lg text-on-surface-variant hover:text-primary hover:bg-pastel-lavender-start transition-all" data-scope="prodi">
        Top Program Studi (Sistem Informasi)
      </button>
</div>
<div class="flex items-center gap-1 bg-surface-body p-1 rounded-full self-start md:self-auto">
<button class="period-btn active px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-surface-card text-text-primary shadow-sm transition-all" data-period="sem">
        Semester Ini (Ganjil 24/25)
      </button>
<button class="period-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md text-text-muted hover:text-text-primary transition-all" data-period="month">
        Bulan Ini
      </button>
<button class="period-btn px-3.5 py-1.5 rounded-full font-label-md text-label-md text-text-muted hover:text-text-primary transition-all" data-period="all">
        Sepanjang Masa
      </button>
</div>
</div>
<div class="relative overflow-hidden rounded-[24px] bg-gradient-to-r from-pastel-lavender-start via-surface-card to-pastel-lavender-end p-6 shadow-sm">
<div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex items-center gap-4">
<div class="relative flex items-center justify-center w-14 h-14 rounded-full bg-primary-container text-on-primary-container shadow-md">
<span class="material-symbols-outlined text-[30px]">workspace_premium</span>
<span class="absolute -top-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-badge-emerald text-on-error font-label-sm text-label-sm">#2</span>
</div>
<div>
<div class="flex items-center gap-2">
<h3 class="font-headline-sm text-headline-sm text-text-primary">Posisi Kamu Saat Ini: Peringkat #2 Universitas</h3>
<span class="px-2.5 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm tracking-wide uppercase">Kamu</span>
</div>
<p class="font-body-md text-body-md text-text-muted mt-0.5">
            Hebat, Nabila! Butuh <span class="font-label-lg text-label-lg text-primary">870 XP lagi</span> untuk mengejar Peringkat #1 (Rian Firmansyah).
          </p>
</div>
</div>
<div class="flex items-center gap-4 min-w-[260px]">
<div class="flex-1 space-y-1.5">
<div class="flex justify-between font-label-md text-label-md text-text-muted">
<span>XP Progres ke Rank #1</span>
<span class="text-text-primary font-bold">81.9%</span>
</div>
<div class="w-full h-2.5 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-gradient-to-r from-primary-container to-secondary" style="width: 81.9%"></div>
</div>
</div>
<button class="px-4 py-2 rounded-full bg-surface-card text-primary font-label-md text-label-md shadow-sm hover:bg-pastel-lavender-start transition-all whitespace-nowrap">
          Selesaikan Quest
        </button>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end pt-8">
<div class="order-2 md:order-1 bg-surface-card rounded-[24px] p-6 shadow-sm hover:-translate-y-1 transition-all flex flex-col items-center text-center relative">
<div class="absolute -top-6 w-12 h-12 rounded-full bg-surface-sidebar shadow-md flex items-center justify-center text-on-surface-variant font-headline-sm text-headline-sm">
        2
      </div>
<div class="relative mt-2 mb-3">
<img class="w-20 h-20 rounded-full object-cover ring-4 ring-pastel-lavender-start shadow-md" data-alt="Warm and confident Asian university female student portrait with soft lighting, natural smile, wearing light lilac casual college attire, clean pastel academic background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKcvtVBQXroo_4Ngb9SNImoBpQss9hKTSC_HWMA8960dOQmrsaE26uyb8J2q14IGx-VLRiXfQ6hJ72U2vhXuGHNpp2VAVFp4sgEueZF_R_Xm6VZrgnkkgRAtWb1xsVLWN9LbBKWbjoIvUeHtItu5_7u4toJ4GHjUbtZk_KXbCBB1Kw_3knAqz7GmDd8cLQTwBwjEyH-7wfqx13AFMBGX1G7jsdV6JiO4UmkYvzL3A"/>
<span class="absolute bottom-0 right-0 px-2 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm">Kamu</span>
</div>
<div class="flex items-center gap-1.5 text-badge-violet">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider">Level 4 Scholar</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-text-primary mt-1">Nabila Putri</h3>
<p class="font-body-sm text-body-sm text-text-muted">Sistem Informasi • Fasilkom</p>
<div class="w-full my-4 py-3 rounded-2xl bg-surface-container-low flex items-center justify-around">
<div>
<span class="block font-headline-md text-headline-md text-primary font-bold">3,950</span>
<span class="font-label-sm text-label-sm text-text-muted">Total XP</span>
</div>
<div class="w-px h-8 bg-outline-variant"></div>
<div>
<span class="block font-headline-md text-headline-md text-badge-emerald font-bold">28</span>
<span class="font-label-sm text-label-sm text-text-muted">Quest Tuntas</span>
</div>
</div>
<span class="inline-flex items-center gap-1 text-badge-emerald font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">arrow_upward</span>
<span>Naik 1 peringkat minggu ini</span>
</span>
</div>
<div class="order-1 md:order-2 bg-surface-card rounded-[28px] p-8 shadow-xl hover:-translate-y-1 transition-all flex flex-col items-center text-center relative -mt-4 bg-gradient-to-b from-pastel-lavender-start/40 via-surface-card to-surface-card">
<div class="absolute -top-7 flex flex-col items-center">
<span class="material-symbols-outlined text-badge-gold text-[34px] animate-bounce">crown</span>
<div class="w-14 h-14 rounded-full bg-badge-gold text-on-primary shadow-lg flex items-center justify-center font-headline-lg text-headline-lg">
          1
        </div>
</div>
<div class="relative mt-8 mb-4">
<img class="w-24 h-24 rounded-full object-cover ring-4 ring-badge-gold/40 shadow-lg" data-alt="Charismatic Indonesian male university scholar portrait, wearing modern collegiate navy cardigan, glowing academic award ribbon pin, bright studio lighting with clean soft minimalist backdrop" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsTP7T25DPPxTkklCOkOmwvxGrcevbZmwcCFaFLqPdUYcXojid2HAA7I3aop6YvvIQQ_UJ3IQ9xNfCINchM40v6_FK5KT80JeoVf-ihY_PuJq_idiyqfTBrx3V4TXdhXfnOTsZvsDCmTYSdfrN9muyktPuG-_VdeBYYYcmGlhbt1kgTBKmcJy7oF5AN_CB0Nb7NegeasvL2iEiqH7oIE7w5Fero7UgR_HCjXeL5FY"/>
<div class="absolute -bottom-2 inset-x-0 mx-auto w-max px-3 py-0.5 rounded-full bg-gradient-to-r from-badge-gold to-secondary-container text-on-primary font-label-sm text-label-sm shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">local_fire_department</span>
<span>Champion Badge</span>
</div>
</div>
<div class="flex items-center gap-1.5 text-badge-violet mt-1">
<span class="material-symbols-outlined text-[18px]">stars</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider font-bold">Level 5 Master Scholar</span>
</div>
<h3 class="font-headline-md text-headline-md text-text-primary mt-1">Rian Firmansyah</h3>
<p class="font-body-sm text-body-sm text-text-muted">Teknik Informatika • Fasilkom</p>
<div class="w-full my-4 py-3.5 rounded-2xl bg-pastel-lavender-start flex items-center justify-around">
<div>
<span class="block font-headline-lg text-headline-lg text-primary font-bold">4,820</span>
<span class="font-label-sm text-label-sm text-text-muted">Total XP</span>
</div>
<div class="w-px h-8 bg-outline-variant"></div>
<div>
<span class="block font-headline-md text-headline-md text-secondary font-bold">36</span>
<span class="font-label-sm text-label-sm text-text-muted">Quest Tuntas</span>
</div>
</div>
<span class="inline-flex items-center gap-1 text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">military_tech</span>
<span>Pertahankan Posisi 4 Pekan</span>
</span>
</div>
<div class="order-3 bg-surface-card rounded-[24px] p-6 shadow-sm hover:-translate-y-1 transition-all flex flex-col items-center text-center relative">
<div class="absolute -top-6 w-12 h-12 rounded-full bg-surface-container shadow-md flex items-center justify-center text-on-surface-variant font-headline-sm text-headline-sm">
        3
      </div>
<div class="relative mt-2 mb-3">
<img class="w-20 h-20 rounded-full object-cover ring-4 ring-surface-container shadow-md" data-alt="Young enthusiastic male university student portrait with stylish glasses, cheerful friendly expression, soft natural background with lavender lighting tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUfNWrwWUpoUnqE_8PnvC6zCFeTxwg3lDSSFSinAbjJ15Wh4yhj2ugqIqVFuS4-VyXpJAgFle7pPw292GEqJjNF4gDreAk5cKxkhGx-0juOjD9BpU17mTEER0JN5y61I3OYX41uAXIthkfNN9qP9UC9fddF-tAxp4YUf_9nNFEa9ywalqwmkYReHHsDleKb66c2DkX0QEceEyfiV3RTnCX5_4j_6LcpZI-Q4-BWEo"/>
<span class="absolute bottom-0 right-0 px-2 py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm">Top 3</span>
</div>
<div class="flex items-center gap-1.5 text-badge-violet">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider">Level 4 Scholar</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-text-primary mt-1">Farhan Maulana</h3>
<p class="font-body-sm text-body-sm text-text-muted">Teknologi Informasi • Fasilkom</p>
<div class="w-full my-4 py-3 rounded-2xl bg-surface-container-low flex items-center justify-around">
<div>
<span class="block font-headline-md text-headline-md text-primary font-bold">3,610</span>
<span class="font-label-sm text-label-sm text-text-muted">Total XP</span>
</div>
<div class="w-px h-8 bg-outline-variant"></div>
<div>
<span class="block font-headline-md text-headline-md text-badge-emerald font-bold">24</span>
<span class="font-label-sm text-label-sm text-text-muted">Quest Tuntas</span>
</div>
</div>
<span class="inline-flex items-center gap-1 text-text-muted font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">horizontal_rule</span>
<span>Posisi stabil tanpa perubahan</span>
</span>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<div class="lg:col-span-8 flex flex-col gap-4">
<div class="flex items-center justify-between px-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[22px]">format_list_numbered</span>
<h2 class="font-headline-md text-headline-md text-text-primary">Daftar Peringkat 4 – 10</h2>
</div>
<div class="flex items-center gap-2">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-text-muted text-[18px]">search</span>
<input class="pl-9 pr-4 py-1.5 bg-surface-card rounded-full font-body-sm text-body-sm text-text-primary shadow-sm outline-none focus:ring-2 focus:ring-primary/20 w-48 transition-all" id="studentSearch" placeholder="Cari nama atau NIM..." type="text"/>
</div>
</div>
</div>
<div class="bg-surface-card rounded-[24px] shadow-sm overflow-hidden p-3">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="text-text-muted font-label-md text-label-md uppercase tracking-wider">
<th class="py-3 px-4 w-16 text-center">Rank</th>
<th class="py-3 px-4">Mahasiswa</th>
<th class="py-3 px-4">Prodi &amp; Fakultas</th>
<th class="py-3 px-4">Tingkat Level</th>
<th class="py-3 px-4 text-right">Total XP</th>
<th class="py-3 px-4 text-center">Tren</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low font-body-md text-body-md" id="leaderboard-table-body">
<tr class="hover:bg-pastel-lavender-start/50 transition-colors rounded-xl">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#4</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-pastel-lavender-start flex items-center justify-center font-label-md text-label-md text-primary font-bold">
                      DA
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Dinda Ayu Lestari</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2106****42</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Teknik Elektro</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">Fakultas Teknik</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">psychology</span>
<span>Level 4 Adventurer</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-primary font-bold">3,420</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-0.5 text-badge-emerald font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">arrow_drop_up</span>
<span>2</span>
</span>
</td>
</tr>
<tr class="hover:bg-pastel-lavender-start/50 transition-colors">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#5</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-pastel-lavender-end flex items-center justify-center font-label-md text-label-md text-secondary font-bold">
                      BP
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Bima Pratama</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2208****19</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Manajemen Bisnis</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">FEB</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-sidebar text-text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">auto_stories</span>
<span>Level 3 Researcher</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-text-primary font-bold">3,180</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-0.5 text-error font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">arrow_drop_down</span>
<span>1</span>
</span>
</td>
</tr>
<tr class="hover:bg-pastel-lavender-start/50 transition-colors">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#6</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-pastel-lavender-start flex items-center justify-center font-label-md text-label-md text-badge-sky font-bold">
                      SK
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Siti Khadijah</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2102****77</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Pendidikan Dokter</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">FK</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-sidebar text-text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">biotech</span>
<span>Level 3 Researcher</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-text-primary font-bold">2,990</td>
<td class="py-3.5 px-4 text-center">
<span class="text-text-muted font-label-sm text-label-sm">—</span>
</td>
</tr>
<tr class="hover:bg-pastel-lavender-start/50 transition-colors">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#7</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-pastel-lavender-start flex items-center justify-center font-label-md text-label-md text-primary font-bold">
                      AS
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Aditya Saputra</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2301****05</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Ilmu Komputer</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">Fakultas Ilmu Komputer</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-pastel-lavender-start text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">code</span>
<span>Level 3 Developer</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-text-primary font-bold">2,840</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-0.5 text-badge-emerald font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">arrow_drop_up</span>
<span>3</span>
</span>
</td>
</tr>
<tr class="hover:bg-pastel-lavender-start/50 transition-colors">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#8</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-surface-sidebar flex items-center justify-center font-label-md text-label-md text-on-surface-variant font-bold">
                      TI
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Tari Indah Permata</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2109****88</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Akuntansi Terapan</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">FEB</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-sidebar text-text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">analytics</span>
<span>Level 2 Apprentice</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-text-primary font-bold">2,710</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-0.5 text-error font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">arrow_drop_down</span>
<span>2</span>
</span>
</td>
</tr>
<tr class="hover:bg-pastel-lavender-start/50 transition-colors">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#9</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-pastel-lavender-start flex items-center justify-center font-label-md text-label-md text-badge-violet font-bold">
                      MR
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Muhammad Rizky</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2204****33</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Teknik Mesin</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">Fakultas Teknik</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-sidebar text-text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">precision_manufacturing</span>
<span>Level 2 Apprentice</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-text-primary font-bold">2,630</td>
<td class="py-3.5 px-4 text-center">
<span class="text-text-muted font-label-sm text-label-sm">—</span>
</td>
</tr>
<tr class="hover:bg-pastel-lavender-start/50 transition-colors">
<td class="py-3.5 px-4 text-center font-label-lg text-label-lg text-text-muted">#10</td>
<td class="py-3.5 px-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-pastel-lavender-end flex items-center justify-center font-label-md text-label-md text-primary font-bold">
                      KW
                    </div>
<div>
<p class="font-label-lg text-label-lg text-text-primary leading-tight">Kirana Wulandari</p>
<p class="font-body-sm text-body-sm text-text-muted leading-tight">2305****12</p>
</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="block font-label-md text-label-md text-text-primary leading-tight">Sistem Informasi</span>
<span class="block font-body-sm text-body-sm text-text-muted leading-tight">Fasilkom</span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-sidebar text-text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">flag</span>
<span>Level 2 Apprentice</span>
</span>
</td>
<td class="py-3.5 px-4 text-right font-headline-sm text-headline-sm text-text-primary font-bold">2,510</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-0.5 text-badge-emerald font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">arrow_drop_up</span>
<span>1</span>
</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="lg:col-span-4 flex flex-col gap-6">
<div class="bg-surface-card rounded-[24px] p-6 shadow-sm space-y-5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]">bar_chart</span>
<h3 class="font-headline-sm text-headline-sm text-text-primary">Klasemen Fakultas</h3>
</div>
<span class="font-label-sm text-label-sm text-text-muted uppercase">Akumulasi XP</span>
</div>
<p class="font-body-sm text-body-sm text-text-muted">
          Perbandingan total keaktifan mahasiswa antar fakultas pada semester berjalan.
        </p>
<div class="space-y-4 pt-1">
<div class="space-y-1.5">
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-text-primary">1. Fasilkom</span>
<span class="font-label-md text-label-md text-primary font-bold">142,580 XP</span>
</div>
<div class="w-full h-3 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-gradient-to-r from-primary to-badge-violet" style="width: 100%"></div>
</div>
<div class="flex justify-between text-[11px] text-text-muted">
<span>1,240 Mahasiswa Aktif</span>
<span class="text-badge-emerald font-semibold">Tinggi (+12%)</span>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-text-primary">2. Fakultas Teknik</span>
<span class="font-label-md text-label-md text-text-primary font-bold">118,920 XP</span>
</div>
<div class="w-full h-3 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-primary/70" style="width: 83%"></div>
</div>
<div class="flex justify-between text-[11px] text-text-muted">
<span>1,850 Mahasiswa Aktif</span>
<span>Stabil (+4%)</span>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-text-primary">3. FEB</span>
<span class="font-label-md text-label-md text-text-primary font-bold">98,400 XP</span>
</div>
<div class="w-full h-3 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-primary/50" style="width: 69%"></div>
</div>
<div class="flex justify-between text-[11px] text-text-muted">
<span>1,520 Mahasiswa Aktif</span>
<span>Meningkat (+7%)</span>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between items-center">
<span class="font-label-md text-label-md text-text-primary">4. Kedokteran (FK)</span>
<span class="font-label-md text-label-md text-text-primary font-bold">76,150 XP</span>
</div>
<div class="w-full h-3 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-primary/30" style="width: 53%"></div>
</div>
<div class="flex justify-between text-[11px] text-text-muted">
<span>890 Mahasiswa Aktif</span>
<span>Stabil (+2%)</span>
</div>
</div>
</div>
<div class="p-3.5 rounded-2xl bg-pastel-lavender-start flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[24px]">school</span>
<p class="font-body-sm text-body-sm text-text-primary">
            Fasilkom memimpin perebutan <strong>Piala Rektorat Quest 2024/2025</strong>!
          </p>
</div>
</div>
<div class="bg-surface-card rounded-[24px] p-6 shadow-sm space-y-4">
<h4 class="font-headline-sm text-headline-sm text-text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[20px]">insights</span>
<span>Panduan Distribusi XP</span>
</h4>
<div class="space-y-3 font-body-sm text-body-sm text-text-muted">
<div class="flex items-start gap-2.5">
<span class="w-2 h-2 rounded-full bg-badge-emerald mt-1.5 shrink-0"></span>
<p><strong class="text-text-primary">Publikasi Riset &amp; Jurnal:</strong> Menghasilkan 500 – 1,000 XP per karya terbit.</p>
</div>
<div class="flex items-start gap-2.5">
<span class="w-2 h-2 rounded-full bg-badge-violet mt-1.5 shrink-0"></span>
<p><strong class="text-text-primary">Kompetisi &amp; Hackathon:</strong> Pemenang memperoleh reward langsung 600 XP.</p>
</div>
<div class="flex items-start gap-2.5">
<span class="w-2 h-2 rounded-full bg-badge-sky mt-1.5 shrink-0"></span>
<p><strong class="text-text-primary">Aktivitas Organisasi:</strong> Kehadiran dan kepengurusan terverifikasi 100 – 300 XP.</p>
</div>
</div>
</div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const scopeButtons = document.querySelectorAll('.scope-btn');
      scopeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          scopeButtons.forEach(b => {
            b.classList.remove('bg-primary-container', 'text-on-primary-container', 'shadow-sm', 'active');
            b.classList.add('text-on-surface-variant');
          });
          btn.classList.add('bg-primary-container', 'text-on-primary-container', 'shadow-sm', 'active');
          btn.classList.remove('text-on-surface-variant');
        });
      });

      const periodButtons = document.querySelectorAll('.period-btn');
      periodButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          periodButtons.forEach(b => {
            b.classList.remove('bg-surface-card', 'text-text-primary', 'shadow-sm', 'active');
            b.classList.add('text-text-muted');
          });
          btn.classList.add('bg-surface-card', 'text-text-primary', 'shadow-sm', 'active');
          btn.classList.remove('text-text-muted');
        });
      });

      const searchInput = document.getElementById('studentSearch');
      const tableBody = document.getElementById('leaderboard-table-body');
      if (searchInput && tableBody) {
        searchInput.addEventListener('input', (e) => {
          const val = e.target.value.toLowerCase();
          const rows = tableBody.querySelectorAll('tr');
          rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(val) ? '' : 'none';
          });
        });
      }
    });
  </script>
</div>
@endsection
