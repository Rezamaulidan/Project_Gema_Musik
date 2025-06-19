<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Gema Music School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<!-- Login Card -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow" style="width: 350px;">
        <div class="card-header text-center">
            <h3 class="mb-0">Login</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light">
                            <!-- Ikon kunci SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 17a2 2 0 100-4 2 2 0 000 4zm6-6V9a6 6 0 10-12 0v2a2 2 0 00-2 2v7a2 2 0 002 2h12a2 2 0 002-2v-7a2 2 0 00-2-2zm-8-2a4 4 0 118 0v2H8V9z"/>
                            </svg>
                        </span>
                        <input type="password" class="form-control" id="login-password" name="password" required autocomplete="current-password">
                        <button class="btn btn-outline-secondary" type="button" id="toggle-login-password">
                            <!-- Ikon mata SVG -->
                            <svg id="login-password-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm7.5 0s-3-7.5-10.5-7.5S2.5 12 2.5 12s3 7.5 10.5 7.5S21.5 12 21.5 12z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-yellow w-100">Login</button>
            </form>
            <div class="mt-3 text-center">
                <a href="{{ url('/register') }}" class="text-primary">Belum punya akun? ayo daftar</a>
            </div>
            <div class="mt-2 text-center">
                <a href="{{ url('/') }}" class="btn btn-link p-0" style="font-size: 0.95rem;">&larr; Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('toggle-login-password').addEventListener('click', function () {
    const pwd = document.getElementById('login-password');
    const icon = document.getElementById('login-password-icon');
    if (pwd.type === 'password') {
        pwd.type = 'text';
        icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19.5c-7.5 0-10.5-7.5-10.5-7.5a21.7 21.7 0 013.457-4.568M9.88 9.88a3 3 0 014.24 4.24M3 3l18 18"/>
        </svg>`;
    } else {
        pwd.type = 'password';
        icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm7.5 0s-3-7.5-10.5-7.5S2.5 12 2.5 12s3 7.5 10.5 7.5S21.5 12 21.5 12z"/>
        </svg>`;
    }
});
</script>
</body>
</html>