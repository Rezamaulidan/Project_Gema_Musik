<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tentang Sekolah</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <header>
    <div class="logo">
      <img src="{{ asset('logo1.png') }}" alt="Logo" class="logo-icon" />
      <h1>Gema Music School Yogyakarta</h1>
    </div>
    <nav>
      <a href="/">Beranda</a>
      <div class="dropdown">
        <button class="dropbtn">Profile Sekolah ▾</button>
        <div class="dropdown-content">
          <a href="/tentang" class="{{ Request::is('tentang') ? 'active-submenu' : '' }}">Tentang Sekolah</a>
          <a href="/program" class="{{ Request::is('program') ? 'active-submenu' : '' }}">Program Unggulan</a>
        </div>
      </div>
      <a href="#">Jadwal</a>
      <div class="dropdown">Pendaftaran ▾</div>
      <div class="dropdown">Pengaturan ▾</div>
      <span class="user-icon">👤</span>
    </nav>
  </header>

  <section class="content" style="display: flex; gap: 20px; padding: 20px;">
    <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
      <img src="{{ asset('gambar2.jpg') }}" alt="studio" style="width: 100%; border-radius: 12px;">
      <img src="{{ asset('gambar3.jpg') }}" alt="penyanyi" style="width: 100%; border-radius: 12px;">
    </div>
    <div style="flex: 2;">
      <p class="justify">Gema Music School adalah sekolah musik yang berlokasi di Provinsi Daerah Istimewa Yogyakarta, didirikan oleh musisi legendaris Indonesia, Iwan Fals, pada tahun 1990, di puncak masa kejayaannya. Di tengah gemerlap dunia hiburan dan sorotan panggung besar, Iwan justru memilih langkah yang berbeda—ia menyisihkan waktu dan energinya untuk merintis ruang pembelajaran musik yang membumi dan bermakna. Ia percaya bahwa musik bukan sekadar hiburan, melainkan medium untuk menyentuh hati, membentuk karakter, dan membangun generasi yang berani berekspresi. Bagi Iwan, pendidikan musik harus mampu menyatukan nilai-nilai keindahan seni dengan disiplin dan ketekunan yang mendalam.</p>
      <br>
      <p class="justify">Sekolah ini didirikan dengan semangat untuk memperluas cakrawala musikal anak-anak bangsa, menjadikan musik sebagai bahasa universal yang dapat menjangkau segala usia, latar belakang, dan mimpi. Gema Music School bukan hanya mencetak musisi, tetapi membentuk pribadi yang memahami makna musik sebagai bagian dari perjalanan hidup. Kurikulumnya dirancang tidak hanya untuk mengasah kemampuan teknis, tetapi juga menggali potensi emosional dan kreativitas siswa secara holistik. Iwan Fals melihat bahwa musik Indonesia memiliki potensi besar untuk dikenal dunia, asalkan dirawat dan ditumbuhkan dengan cinta, dedikasi, serta keberanian untuk terus berkarya secara otentik. Melalui Gema Music School, visi ini terus hidup, berkembang, dan menginspirasi banyak generasi penerus.</p>
      <br>
      <p class="justify">Melalui Gema Music School, Iwan menghadirkan tempat belajar yang bukan hanya mengasah teknik, tetapi juga menyalakan jiwa. Ia percaya bahwa musik sejati lahir dari hati yang jujur dan perasaan yang mendalam—bukan sekadar dari ketepatan nada atau kecepatan jari. Di sekolah ini, proses belajar bukan hanya tentang latihan dan teori, tetapi tentang perjalanan batin untuk menemukan suara diri sendiri. Bagi Iwan, setiap anak punya melodi tersendiri yang unik dan penuh warna, dan tugas pendidikan musik adalah membantu mereka menemukan nada-nada itu, merangkainya menjadi lagu kehidupan yang utuh dan bermakna.</p>
      <br>
      <p class="justify">Gema tumbuh menjadi rumah bagi mereka yang ingin menjadikan musik sebagai jalan hidup—bukan sekadar suara yang indah, tapi juga pesan yang menggerakkan. Sekolah ini menjadi ruang aman tempat murid bisa berani mengekspresikan diri, bereksperimen, dan tumbuh tanpa takut salah. Musik diajarkan sebagai alat untuk menyampaikan isi hati, menyentuh orang lain, dan meresapi kehidupan dengan lebih dalam. Gema Music School bukan hanya mencetak generasi yang piawai bermain alat musik, tetapi generasi yang sadar akan kekuatan musik untuk membangun empati, menyatukan perbedaan, dan menjadi suara bagi yang tak bersuara. Inilah pendidikan musik yang tidak hanya mencerdaskan, tapi juga menghidupkan.</p>
      <br>
      <p class="justify">Di setiap ruang kelas Gema, bukan hanya suara alat musik yang terdengar, tapi juga tawa, semangat, dan mimpi yang tumbuh bersama. Setiap hari adalah momen di mana siswa datang membawa rasa ingin tahu, lalu pulang dengan keyakinan baru akan potensi dirinya. Hubungan antara pengajar dan siswa tidak hanya sebatas akademik, tapi menjadi relasi yang membangun kepercayaan dan keberanian untuk tampil. Gema menjadi tempat di mana nilai-nilai seperti kejujuran, kerja keras, kolaborasi, dan cinta terhadap seni ditanamkan dengan penuh kasih. Di sinilah harmoni tercipta—antara guru dan murid, antara mimpi dan kenyataan, antara nada dan makna. Dan dari tempat sederhana ini, gema suara para pemimpi terus menggema ke penjuru dunia.</p>
    </div>
  </section>

  <section style="text-align: center; margin: 30px auto;">
    <p>Mari menyatu dalam irama—klik dan dengarkan cerita kami.</p>
    <div style="display: flex; justify-content: center; gap: 10px; margin-top: 10px;">
      <a href="#" class="sosmed-button">Instagram</a>
      <a href="#" class="sosmed-button">YouTube</a>
      <a href="#" class="sosmed-button">TikTok</a>
    </div>
  </section>

  <footer>
    © 2025 Gema Music School. All rights reserved.
  </footer>

</body>
</html>
