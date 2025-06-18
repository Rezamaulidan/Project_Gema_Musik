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
                    <input type="password" class="form-control" id="password" name="password" required>
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
</body>
</html>