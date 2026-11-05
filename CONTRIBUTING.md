# Panduan Kerja & Kolaborasi GitHub — Kelompok 5 (CampusQuest)

Dokumen ini adalah panduan resmi kerja tim **Kelompok 5** untuk pengembangan aplikasi **CampusQuest: Gamifikasi Pengembangan Diri Mahasiswa**.

---

## 1. Pembagian Role, Branch, dan Wilayah File (Anti-Conflict)

Agar tidak terjadi *merge conflict* (bentrok kode), setiap anggota memiliki **branch**, **Controller**, dan **folder View** masing-masing:

| Epic | Fitur Utama | PIC & NIM | Nama Branch | Controller Utama | View Utama |
| :-: | :--- | :--- | :--- | :--- | :--- |
| **1** | Manajemen Pengajuan & Validasi Misi | **Nayla Assyifa**<br>`103032400078` | `feature/epic1-submission-nayla` | `app/Http/Controllers/SubmissionController.php`<br>`app/Http/Controllers/AdminValidationController.php` | `resources/views/submissions/*`<br>`resources/views/admin/*` |
| **2** | Sistem Gamifikasi (XP, Level & Badge) | **Nathasya Yuan M.**<br>`103032400001` | `feature/epic2-gamification-nathasya` | `app/Http/Controllers/DashboardController.php` | `resources/views/dashboard.blade.php` |
| **3** | Leaderboard & Peringkat | **Nur Syadira**<br>`103032400123` | `feature/epic3-leaderboard-syadira` | `app/Http/Controllers/LeaderboardController.php` | `resources/views/leaderboard.blade.php` |
| **4** | Campus Exploration (Katalog Quest) | **Naira Cahaya P.**<br>`103032400100` | `feature/epic4-exploration-naira` | `app/Http/Controllers/MissionController.php` | `resources/views/missions/*` |
| **5** | Team Quest (Fitur Kolaborasi) | **Anggita Cahyati H.**<br>`103032400041` | `feature/epic5-team-quest-anggita` | `app/Http/Controllers/TeamController.php` | `resources/views/teams/*` |
| **6** | Digital Achievement Portfolio | **Fathurrahman A.**<br>`103032400035` | `feature/epic6-portfolio-fathur` | `app/Http/Controllers/PortfolioController.php` | `resources/views/portfolio/*` |

> **ATURAN PENTING:**
> 1. Jangan mengedit Controller atau View milik anggota lain tanpa koordinasi.
> 2. Jika perlu menambahkan route di `routes/web.php`, **hanya tambahkan di dalam blok komentar Epic Anda masing-masing**.
> 3. Jangan mengubah `resources/views/layouts/app.blade.php` kecuali disepakati bersama di grup.

---

## 2. Persiapan Awal di Laptop Masing-Masing (Hanya 1x di Awal)

Setelah melakukan `git clone`, jalankan perintah berikut di terminal:

```bash
# 1. Masuk ke folder project
cd campusquest

# 2. Pindah ke branch develop
git checkout develop

# 3. Install dependency Composer
composer install

# 4. Salin file .env dan buat key
cp .env.example .env
php artisan key:generate

# 5. Buat file database SQLite & isi dengan data dummy Kelompok 5
touch database/database.sqlite
php artisan migrate:fresh --seed

# 6. Jalankan server
php artisan serve
```

---

## 3. Alur Kerja Harian (Setiap Kali Mau Ngoding)

Ikuti 5 langkah ini setiap kali Anda mulai mengerjakan tugas:

### Langkah 1: Pindah ke Branch Anda Sendiri
```bash
git checkout feature/nama-branch-anda
# Contoh untuk Fathur:
# git checkout feature/epic6-portfolio-fathur
```

### Langkah 2: Ambil Update Terbaru dari `develop`
```bash
git pull origin develop
```

### Langkah 3: Kerjakan Kode Anda & Cek di Browser
Jalankan `php artisan serve` dan buka `http://127.0.0.1:8000`.
Jika butuh me-reset database ke data awal:
```bash
php artisan migrate:fresh --seed
```

### Langkah 4: Simpan (Commit) & Upload (Push) Pekerjaan Anda
Gunakan format pesan commit yang rapi:
- `feat(epic): deskripsi` untuk fitur baru
- `fix(epic): deskripsi` untuk perbaikan bug
- `style(epic): deskripsi` untuk perbaikan tampilan UI

```bash
git add .
git commit -m "feat(portfolio): tambah fitur pratinjau portofolio dan tombol cetak"
git push origin feature/nama-branch-anda
```

### Langkah 5: Buat Pull Request (PR) di GitHub
1. Buka repositori GitHub `zhaturra1/campusquest`.
2. Klik tombol **"Compare & pull request"**.
3. Pastikan arah branch adalah: **`base: develop` <-- `compare: feature/nama-branch-anda`** *(JANGAN ke `main`)*.
4. Isi checklist PR yang muncul otomatis, lalu klik **Create pull request**.

---

## 4. Cara Saling Membantu Antar Anggota (Co-Working)

Jika Anda sudah selesai mengerjakan tugas Anda dan ingin membantu teman satu kelompok (misalnya **Fathur** ingin membantu **Nayla** di Epic 1):

```bash
# 1. Ambil daftar branch terbaru dari GitHub
git fetch origin

# 2. Pindah ke branch teman yang ingin dibantu
git checkout feature/epic1-submission-nayla

# 3. Tarik kode terbaru milik teman tersebut
git pull origin feature/epic1-submission-nayla

# 4. Kerjakan bagian yang disepakati, lalu commit & push kembali ke branch teman tersebut
git add .
git commit -m "feat(submission): bantu integrasi AJAX approve dan reject di halaman admin"
git push origin feature/epic1-submission-nayla
```
