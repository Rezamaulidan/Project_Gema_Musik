<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gema Music School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="36" height="36" class="me-2"
                style="object-fit:contain;">
            Gema Music School
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto ms-4">
                <li class="nav-item"><a class="nav-link" href="#">Profile sekolah</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Info pendaftaran</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Jadwal</a></li>
            </ul>
            <div class="d-flex gap-2">
                <a href="{{ url('/login') }}" class="btn btn-yellow">Log In</a>
                <a href="{{ url('/register') }}" class="btn btn-yellow">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Pendaftaran Penerimaan Siswa Baru Telah Di Buka</h1>
        <p>tunggu apalagi, yuk buruan daftar sekarang!</p>
    </div>

    <!-- Gallery Section -->
    <div class="container py-5">
        <div class="row g-4 gallery">
            <div class="col-md-6">
                <img src="{{ asset('images/1_.png') }}" alt="Juara 1" class="img-fluid w-100">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/2_.png') }}" alt="Juara 2" class="img-fluid w-100">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>