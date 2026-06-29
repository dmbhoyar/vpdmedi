<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') – MedCare Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root { --sidebar:220px; --primary:#0057B8; --dark:#0d1b3e; }
        body { background:#f4f7fb; font-family:'Segoe UI',sans-serif; }

        /* Sidebar */
        .sidebar {
            position:fixed; top:0; left:0; height:100vh; width:var(--sidebar);
            background:var(--dark); display:flex; flex-direction:column; z-index:200;
        }
        .sidebar-brand {
            padding:20px 18px; border-bottom:1px solid rgba(255,255,255,.08);
            font-weight:800; font-size:16px; color:#fff;
        }
        .sidebar-brand small { display:block; font-size:10px; color:#6b8fc2; font-weight:400; letter-spacing:1px; }
        .sidebar-nav { flex:1; padding:16px 0; overflow-y:auto; }
        .nav-item a {
            display:flex; align-items:center; gap:12px;
            padding:11px 20px; color:#8ba5cc; font-size:14px; font-weight:500;
            transition:all .18s; text-decoration:none;
        }
        .nav-item a:hover, .nav-item a.active {
            color:#fff; background:rgba(255,255,255,.07); border-left:3px solid var(--primary);
        }
        .nav-item a i { font-size:18px; min-width:20px; }
        .sidebar-footer { padding:16px 20px; border-top:1px solid rgba(255,255,255,.08); }

        /* Topbar */
        .topbar {
            position:fixed; top:0; left:var(--sidebar); right:0; height:60px;
            background:#fff; box-shadow:0 1px 8px rgba(0,0,0,.06);
            display:flex; align-items:center; padding:0 24px; z-index:100;
            justify-content:space-between;
        }
        .topbar h5 { margin:0; font-weight:700; font-size:16px; }

        /* Main */
        .main-content { margin-left:var(--sidebar); padding-top:60px; min-height:100vh; }
        .main-inner { padding:28px; }

        /* Cards */
        .stat-card { background:#fff; border-radius:12px; padding:20px 24px; box-shadow:0 2px 12px rgba(0,0,0,.05); }
        .stat-card .num { font-size:32px; font-weight:800; }
        .stat-card .lbl { font-size:13px; color:#6b7897; margin-top:2px; }
        .stat-icon { width:48px; height:48px; border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:22px; }

        .table th { font-size:12px; text-transform:uppercase; letter-spacing:.5px; color:#6b7897; font-weight:600; border-bottom:2px solid #e8edf5; }
        .table td { vertical-align:middle; font-size:14px; }
        .badge { font-size:11px; padding:4px 10px; border-radius:20px; font-weight:600; }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-brand">
        <i class="bi bi-capsule-pill me-2" style="color:var(--primary);"></i>MedCare
        <small>ADMIN PANEL</small>
    </div>
    <nav class="sidebar-nav">
        <ul class="nav-item list-unstyled m-0">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a></li>
            <li><a href="{{ route('admin.catalog') }}" class="{{ request()->routeIs('admin.catalog') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-excel"></i> Product Catalog
            </a></li>
        </ul>
    </nav>
    <div class="sidebar-footer">
        <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none" style="color:#8ba5cc;font-size:13px;">
            <i class="bi bi-globe"></i> View Website
        </a>
        <a href="{{ route('admin.logout') }}" class="d-flex align-items-center gap-2 text-decoration-none mt-2" style="color:#8ba5cc;font-size:13px;">
            <i class="bi bi-box-arrow-left"></i> Logout
        </a>
    </div>
</div>

<!-- Topbar -->
<div class="topbar">
    <h5>@yield('page_title', 'Dashboard')</h5>
    <span style="font-size:13px;color:#6b7897;">Admin Panel</span>
</div>

<!-- Main -->
<div class="main-content">
    <div class="main-inner">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
