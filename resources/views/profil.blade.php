<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Profil | Gema Music School</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="navbar">
      <div class="logo">
        <img src="{{ asset('image/logo.png') }}" alt="Logo Gema Music" class="logo-img">
        Gema Music School Yogyakarta
      </div>

      <ul class="menu">
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a class="active" href="{{ url('/profil') }}">Profil Sekolah</a></li>
        <li><a href="{{ url('/jadwal') }}">Jadwal</a></li>
        <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
        <li><a href="{{ url('/pengaturan') }}">Pengaturan</a></li>
      </ul>

      <a href="{{ url('/profil') }}" class="icon-user">👤</a>
    </nav>

    <!-- Konten Profil -->
    <div class="profil-wrapper">
      <h1 class="judul-halaman">Profil Akun</h1>

      <div class="profil-box-biru">
        <div class="profil-left">
          @if ($profil && $profil->foto)
            <img src="{{ asset('image/' . $profil->foto) }}" class="foto-profil" alt="Foto Pengguna">
          @else
            <div class="foto-profil"></div>
          @endif
          <div class="profil-username">{{ $profil->nama ?? 'Pengguna' }}</div>
        </div>

        <div class="profil-right">
          <label>Nama Pengguna</label>
          <input type="text" class="input-profil" value="{{ $profil->nama ?? '' }}" readonly>

          <label>Email</label>
          <input type="email" class="input-profil" value="{{ $profil->email ?? '' }}" readonly>

          <label>No HP</label>
          <input type="text" class="input-profil" value="{{ $profil->telepon ?? '' }}" readonly>

          <label>Alamat</label>
          <textarea class="input-profil" rows="3" readonly>{{ $profil->alamat ?? '' }}</textarea>

          <button class="tombol-edit">Edit Profil</button>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      &copy; 2025 Gema Music School. All rights reserved.
    </footer>

  </div>
</body>
</html>
