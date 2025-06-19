<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Profil | Gema Music School</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="wrapper">
    <nav class="navbar">
    <div class="logo">
  <img src="{{ asset('image/logo.png') }}" alt="Logo Gema Music" class="logo-img">
  Gema Music School Yogyakarta
</div>
      <ul class="menu">
        <li><a href="index.php">Beranda</a></li>
        <li><a class="active" href="profil.php">Profil sekolah</a></li>
          <li><a href="{{ url('/jadwal') }}">Jadwal</a></li>
           <li><a href="pendaftaran.php">Pendaftaran</a></li>
        <li><a href="pengaturan.php">Pengaturan</a></li>
      </ul>
 <a href="{{ url('/profil') }}" class="icon-user">👤</a>
    </nav>

    <div class="profil-wrapper">
      <h1 class="judul-halaman">Profil Akun</h1>

      <div class="profil-box-biru">
        <div class="profil-left">
          <img src="images/user.jpg" class="foto-profil" alt="Foto Pengguna">
          <div class="profil-username">GemaMusic25</div>
        </div>

        <div class="profil-right">
          <label>Nama Pengguna</label>
          <input type="text" class="input-profil" value="GemaMusic25" readonly>

          <label>Email</label>
          <input type="email" class="input-profil" value="gema@email.com" readonly>

          <label>No HP</label>
          <input type="text" class="input-profil" value="081234567890" readonly>

          <button class="tombol-edit">Edit Profil</button>
        </div>
      </div>
    </div>

    <footer>
      &copy; 2025 Gema Music School. All rights reserved.
    </footer>
  </div>
</body>
</html>
