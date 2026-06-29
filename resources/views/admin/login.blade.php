<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login – MedCare Distributors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #f0f4ff; display:flex; align-items:center; justify-content:center; min-height:100vh; }
        .login-box { background:#fff; border-radius:16px; padding:40px; width:100%; max-width:400px; box-shadow:0 8px 40px rgba(0,87,184,.12); }
        .logo { width:52px; height:52px; background:#0057B8; border-radius:12px; display:flex; align-items:center; justify-content:center; margin:0 auto 16px; }
        .form-control:focus { border-color:#0057B8; box-shadow:0 0 0 3px rgba(0,87,184,.1); }
        .btn-login { background:#0057B8; color:#fff; border:none; width:100%; padding:12px; border-radius:8px; font-weight:600; font-size:15px; }
        .btn-login:hover { background:#003d82; color:#fff; }
    </style>
</head>
<body>
<div class="login-box text-center">
    <div class="logo"><i class="bi bi-capsule-pill" style="font-size:24px;color:#fff;"></i></div>
    <h4 class="fw-800 mb-1">Admin Panel</h4>
    <p class="text-muted small mb-4">MedCare Distributors India Pvt Ltd</p>

    @if($errors->any())
    <div class="alert alert-danger text-start rounded-3 mb-3 py-2">
        {{ $errors->first() }}
    </div>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}">
        @csrf
        <div class="mb-3 text-start">
            <label class="form-label fw-semibold small">Admin Password</label>
            <div class="input-group">
                <input type="password" id="pw" name="password" class="form-control" placeholder="Enter password" autofocus required>
                <button type="button" class="btn btn-outline-secondary" onclick="togglePw()">
                    <i class="bi bi-eye" id="eyeIcon"></i>
                </button>
            </div>
        </div>
        <button type="submit" class="btn-login">
            <i class="bi bi-lock-fill me-2"></i>Login
        </button>
    </form>
    <a href="{{ route('home') }}" class="d-block mt-3 text-muted small">← Back to website</a>
</div>
<script>
function togglePw() {
    const pw = document.getElementById('pw');
    const icon = document.getElementById('eyeIcon');
    if (pw.type === 'password') { pw.type = 'text'; icon.className = 'bi bi-eye-slash'; }
    else { pw.type = 'password'; icon.className = 'bi bi-eye'; }
}
</script>
</body>
</html>
