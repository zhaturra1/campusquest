<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for all 6 CampusQuest Epics.
     */
    public function up(): void
    {
        // Epic 4 (Naira): Katalog Misi / Campus Exploration
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category'); // Akademik, Lomba, Seminar, Kepanitiaan, Sosial
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->unsignedInteger('xp_reward')->default(100);
            $table->date('deadline')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Epic 1 (Nayla) & Epic 6 (Fathur): Pengajuan Bukti & Portofolio Tervalidasi
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mission_id')->constrained()->cascadeOnDelete();
            $table->string('proof_file')->nullable();
            $table->text('notes')->nullable();
            $table->string('status')->default('Menunggu'); // Menunggu, Disetujui, Ditolak
            $table->text('admin_notes')->nullable();
            $table->timestamp('validated_at')->nullable();
            $table->timestamps();
        });

        // Epic 2 (Nathasya): Koleksi Badge Gamifikasi
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->default('🏅');
            $table->string('description')->nullable();
            $table->unsignedInteger('min_xp')->default(0);
            $table->timestamps();
        });

        Schema::create('user_badges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('badge_id')->constrained()->cascadeOnDelete();
            $table->timestamp('awarded_at')->useCurrent();
            $table->timestamps();
        });

        // Epic 5 (Anggita): Team Quest / Kolaborasi Tim
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('quest_target')->nullable();
            $table->foreignId('leader_id')->constrained('users')->cascadeOnDelete();
            $table->unsignedInteger('total_xp')->default(0);
            $table->unsignedInteger('progress_percent')->default(0);
            $table->timestamps();
        });

        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('role_in_team')->default('Anggota'); // Ketua, Anggota
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('user_badges');
        Schema::dropIfExists('badges');
        Schema::dropIfExists('submissions');
        Schema::dropIfExists('missions');
    }
};
