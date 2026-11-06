<?php

namespace Database\Seeders;

use App\Models\Badge;
use App\Models\Mission;
use App\Models\Submission;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $usersData = [
            [
                'nim' => '103032400001',
                'name' => 'Nathasya Yuan Maharani',
                'email' => 'nathasya@student.telkomuniversity.ac.id',
                'faculty' => 'Fakultas Informatika',
                'role' => 'mahasiswa',
                'xp' => 1950,
                'level' => 8,
            ],
            [
                'nim' => '103032400035',
                'name' => 'Fathurrahman Alfarizi',
                'email' => 'fathur@student.telkomuniversity.ac.id',
                'faculty' => 'Fakultas Informatika',
                'role' => 'mahasiswa',
                'xp' => 1720,
                'level' => 7,
            ],
            [
                'nim' => '103032400041',
                'name' => 'Anggita Cahyati Hidayat',
                'email' => 'anggita@student.telkomuniversity.ac.id',
                'faculty' => 'Fakultas Teknik Elektro',
                'role' => 'mahasiswa',
                'xp' => 1850,
                'level' => 8,
            ],
            [
                'nim' => '103032400078',
                'name' => 'Nayla Assyifa',
                'email' => 'nayla@student.telkomuniversity.ac.id',
                'faculty' => 'Fakultas Ekonomi & Bisnis',
                'role' => 'mahasiswa',
                'xp' => 1420,
                'level' => 6,
            ],
            [
                'nim' => '103032400100',
                'name' => 'Naira Cahaya Putri Dermawan Sinaga',
                'email' => 'naira@student.telkomuniversity.ac.id',
                'faculty' => 'Fakultas Komunikasi & Ilmu Sosial',
                'role' => 'mahasiswa',
                'xp' => 1280,
                'level' => 5,
            ],
            [
                'nim' => '103032400123',
                'name' => 'Nur Syadira',
                'email' => 'syadira@student.telkomuniversity.ac.id',
                'faculty' => 'Fakultas Rekayasa Industri',
                'role' => 'mahasiswa',
                'xp' => 1600,
                'level' => 7,
            ],
            [
                'nim' => 'NIP-99001',
                'name' => 'Admin Kemahasiswaan Tel-U',
                'email' => 'admin@telkomuniversity.ac.id',
                'faculty' => 'Direktorat Kemahasiswaan',
                'role' => 'admin',
                'xp' => 0,
                'level' => 1,
            ],
        ];

        $createdUsers = [];
        foreach ($usersData as $u) {
            $createdUsers[] = User::create(array_merge($u, [
                'password' => Hash::make('password123'),
            ]));
        }

        $badgesData = [
            ['name' => 'Pemula Kampus', 'icon' => '🌱', 'description' => 'Menyelesaikan misi pertama di CampusQuest', 'min_xp' => 100],
            ['name' => 'Aktif Seminar', 'icon' => '🎤', 'description' => 'Rajin mengikuti seminar nasional & workshop', 'min_xp' => 500],
            ['name' => 'Social Warrior', 'icon' => '🤝', 'description' => 'Aktif dalam pengabdian masyarakat & kepanitiaan', 'min_xp' => 1000],
            ['name' => 'Juara Lomba', 'icon' => '🏆', 'description' => 'Memenangkan kompetisi tingkat nasional', 'min_xp' => 1500],
        ];

        $badges = [];
        foreach ($badgesData as $b) {
            $badges[] = Badge::create($b);
        }

        $createdUsers[0]->badges()->attach([$badges[0]->id, $badges[1]->id, $badges[2]->id, $badges[3]->id]);
        $createdUsers[1]->badges()->attach([$badges[0]->id, $badges[1]->id, $badges[2]->id]);

        $missionsData = [
            [
                'title' => 'Seminar Nasional AI & Cyber Security',
                'category' => 'Seminar',
                'description' => 'Menghadiri seminar teknologi AI di Auditorium Gedung Damar Telkom University.',
                'location' => 'Auditorium Gedung Damar (GKU)',
                'xp_reward' => 150,
                'deadline' => '2026-12-01',
                'is_active' => true,
            ],
            [
                'title' => 'Lomba Hackathon Inovasi Kampus',
                'category' => 'Lomba',
                'description' => 'Kompetisi pembuatan produk digital 24 jam antar mahasiswa.',
                'location' => 'Telkom University Landmark Tower (TULT)',
                'xp_reward' => 400,
                'deadline' => '2026-12-15',
                'is_active' => true,
            ],
            [
                'title' => 'Bakti Sosial Desa Binaan Pangalengan',
                'category' => 'Sosial',
                'description' => 'Kegiatan pengabdian masyarakat dan literasi digital desa binaan.',
                'location' => 'Desa Binaan Kab. Bandung',
                'xp_reward' => 250,
                'deadline' => '2026-12-10',
                'is_active' => true,
            ],
            [
                'title' => 'Panitia PKKMB Mahasiswa Baru 2026',
                'category' => 'Kepanitiaan',
                'description' => 'Menjadi panitia aktif penyambutan mahasiswa baru tingkat universitas.',
                'location' => 'Lapangan Student Center Tel-U',
                'xp_reward' => 300,
                'deadline' => '2026-11-30',
                'is_active' => true,
            ],
            [
                'title' => 'Publikasi Jurnal / Karya Ilmiah Mahasiswa',
                'category' => 'Akademik',
                'description' => 'Menulis dan mempublikasikan artikel ilmiah bersama dosen pembimbing.',
                'location' => 'Open Library Telkom University',
                'xp_reward' => 500,
                'deadline' => '2026-12-28',
                'is_active' => true,
            ],
        ];

        $missions = [];
        foreach ($missionsData as $m) {
            $missions[] = Mission::create($m);
        }

        Submission::create([
            'user_id' => $createdUsers[0]->id,
            'mission_id' => $missions[0]->id,
            'proof_file' => 'sertifikat_seminar_ai_nathasya.pdf',
            'notes' => 'Hadir penuh dari sesi pagi hingga sore.',
            'status' => 'Disetujui',
            'validated_at' => now()->subDays(3),
        ]);

        Submission::create([
            'user_id' => $createdUsers[1]->id,
            'mission_id' => $missions[1]->id,
            'proof_file' => 'sertifikat_juara_hackathon_fathur.pdf',
            'notes' => 'Juara 1 kategori Smart Campus Web App.',
            'status' => 'Disetujui',
            'validated_at' => now()->subDays(2),
        ]);

        Submission::create([
            'user_id' => $createdUsers[3]->id,
            'mission_id' => $missions[2]->id,
            'proof_file' => 'dokumentasi_baksos_nayla.jpg',
            'notes' => 'Dokumentasi panitia divisi acara.',
            'status' => 'Menunggu',
        ]);

        Submission::create([
            'user_id' => $createdUsers[4]->id,
            'mission_id' => $missions[3]->id,
            'proof_file' => 'sk_kepanitiaan_naira.pdf',
            'notes' => 'SK Kepanitiaan PKKMB 2026.',
            'status' => 'Menunggu',
        ]);

        $team1 = Team::create([
            'name' => 'Kelompok 5 WebPro',
            'quest_target' => 'Lomba Hackathon Inovasi Kampus',
            'leader_id' => $createdUsers[2]->id,
            'total_xp' => 4500,
            'progress_percent' => 85,
        ]);
        $team1->members()->attach($createdUsers[2]->id, ['role_in_team' => 'Ketua']);
        $team1->members()->attach($createdUsers[0]->id, ['role_in_team' => 'Anggota']);
        $team1->members()->attach($createdUsers[1]->id, ['role_in_team' => 'Anggota']);

        $team2 = Team::create([
            'name' => 'Tel-U Cyber Squad',
            'quest_target' => 'Bakti Sosial Desa Binaan Pangalengan',
            'leader_id' => $createdUsers[5]->id,
            'total_xp' => 3800,
            'progress_percent' => 65,
        ]);
        $team2->members()->attach($createdUsers[5]->id, ['role_in_team' => 'Ketua']);
        $team2->members()->attach($createdUsers[3]->id, ['role_in_team' => 'Anggota']);
        $team2->members()->attach($createdUsers[4]->id, ['role_in_team' => 'Anggota']);
    }
}
