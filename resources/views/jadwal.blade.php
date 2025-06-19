<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Jadwal Kelas</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Profile Sekolah ▾</a></li>
       <li><a href="{{ url('/jadwal') }}">Jadwal</a></li>
          <li><a href="pendaftaran.php">Pendaftaran</a></li>
        <li><a href="#">Pengaturan ▾</a></li>
      </ul>
    <a href="{{ url('/profil') }}" class="icon-user">👤</a>
    </nav>

    <!-- Jadwal Info -->
    <div class="jadwal-info">
      <div class="left">
        weekdays: 14.00 - 18.00 ( Sesi 1 )<br>19.00 - 23.00 ( Sesi 2 )
      </div>
      <div class="right">
        weekend: 10.00 - 14.00 ( Sesi 1 )<br>15.00 - 19.00 ( Sesi 2 )
      </div>
    </div>

    <!-- Jadwal Tabel -->
    <div class="jadwal-container">
      <table class="jadwal-table">
        <thead>
          <tr>
            <th></th>
            <th>SENIN</th><th>SELASA</th><th>RABU</th><th>KAMIS</th>
            <th>JUMAT</th><th>SABTU</th><th>MINGGU</th>
          </tr>
        </thead>
       <tbody>
  <tr>
    <td class="instrumen">VOKAL</td>
    <td>14.00 - 18.00</td> <!-- Senin -->
    <td></td>
    <td>14.00 - 18.00</td> <!-- Rabu -->
    <td></td>
    <td></td>
    <td>10.00 - 14.00</td> <!-- Sabtu -->
    <td>10.00 - 14.00</td> <!-- Minggu -->
  </tr>
  <tr>
    <td class="instrumen">PIANO</td>
    <td></td>
    <td>14.00 - 18.00</td> <!-- Selasa -->
    <td></td>
    <td>14.00 - 18.00</td> <!-- Kamis -->
    <td></td>
    <td>15.00 - 19.00</td> <!-- Sabtu -->
    <td>15.00 - 19.00</td> <!-- Minggu -->
  </tr>
  <tr>
    <td class="instrumen">DRUM</td>
    <td></td>
    <td></td>
    <td>19.00 - 23.00</td> <!-- Rabu -->
    <td></td>
    <td>14.00 - 18.00</td> <!-- Jumat -->
    <td>10.00 - 14.00</td>
    <td>10.00 - 14.00</td>
  </tr>
  <tr>
    <td class="instrumen">GITAR</td>
    <td>19.00 - 23.00</td> <!-- Senin -->
    <td>19.00 - 23.00</td> <!-- Selasa -->
    <td></td>
    <td></td>
    <td></td>
    <td>15.00 - 19.00</td>
    <td>15.00 - 19.00</td>
  </tr>
  <tr>
    <td class="instrumen">BIOLA</td>
    <td></td>
    <td></td>
    <td></td>
    <td>19.00 - 23.00</td> <!-- Kamis -->
    <td>19.00 - 23.00</td> <!-- Jumat -->
    <td>10.00 - 14.00</td>
    <td>10.00 - 14.00</td>
  </tr>
</tbody>

      </table>
    </div>

  </div> <!-- end of wrapper -->

  <!-- Footer -->
  <footer>
    &copy; 2025 Gema Music School. All rights reserved.
  </footer>

</body>
</html>
