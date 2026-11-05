<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'CampusQuest') — Telkom University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --bs-primary: #d90429;
        --bs-primary-rgb: 217, 4, 41;
    }
    .btn-primary {
        --bs-btn-bg: #d90429;
        --bs-btn-border-color: #d90429;
        --bs-btn-hover-bg: #b8031f;
        --bs-btn-hover-border-color: #b8031f;
        --bs-btn-active-bg: #a00219;
        --bs-btn-active-border-color: #a00219;
        --bs-btn-disabled-bg: #d90429;
        --bs-btn-disabled-border-color: #d90429;
    }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/dashboard">🎓 CampusQuest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <div class="navbar-nav me-auto">
                <a class="nav-link {{ request()->is('dashboard*') ? 'active fw-semibold' : '' }}" href="/dashboard">Dashboard</a>
                <a class="nav-link {{ request()->is('missions*') ? 'active fw-semibold' : '' }}" href="/missions">Eksplorasi Misi</a>
                <a class="nav-link {{ request()->is('submissions*') ? 'active fw-semibold' : '' }}" href="/submissions">Pengajuan Misi</a>
                <a class="nav-link {{ request()->is('teams*') ? 'active fw-semibold' : '' }}" href="/teams">Team Quest</a>
                <a class="nav-link {{ request()->is('leaderboard*') ? 'active fw-semibold' : '' }}" href="/leaderboard">Leaderboard</a>
                <a class="nav-link {{ request()->is('portfolio*') ? 'active fw-semibold' : '' }}" href="/portfolio">Portofolio Digital</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-link badge bg-white text-danger px-3 py-2" href="/admin/submissions">🛡️ Panel Verifikator (Admin)</a>
            </div>
        </div>
    </div>
</nav>

<main class="container py-4 flex-grow-1">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</main>

<footer class="bg-white border-top py-3 mt-auto">
    <div class="container text-center text-muted small">
        CampusQuest — Kelompok 5 Pemrograman Web (S1 Teknologi Informasi, Telkom University)
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('scripts')
</body>
</html>
