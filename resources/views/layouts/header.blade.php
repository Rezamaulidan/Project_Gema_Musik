<header>
  <div class="logo">
    <img src="{{ asset('logo1.png') }}" alt="Logo" class="logo-icon" />
    <h1>Gema Music School Yogyakarta</h1>
  </div>
  <nav>
    {{-- Beranda --}}
    <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>

    {{-- Profile Sekolah --}}
    <div class="dropdown">
      <button class="dropbtn">Profile Sekolah ▾</button>
      <div class="dropdown-content">
        <a href="{{ route('about') }}" class="{{ request()->is('tentang') ? 'active-submenu' : '' }}">Tentang Sekolah</a>
        <a href="{{ route('program.index') }}" class="{{ request()->is('program-unggulan*') ? 'active-submenu' : '' }}">Program Unggulan</a>
      </div>
    </div>

    {{-- Jadwal --}}
    <a href="#" class="{{ request()->is('jadwal') ? 'active' : '' }}">Jadwal</a>

    {{-- Pendaftaran --}}
    <div class="dropdown">
      <button class="dropbtn">Pendaftaran ▾</button>
      <div class="dropdown-content">
        <a href="#">Pendaftaran Siswa</a>
        <a href="#">Info Biaya</a>
      </div>
    </div>

    {{-- Pengaturan --}}
    <div class="dropdown">
      <button class="dropbtn">Pengaturan ▾</button>
      <div class="dropdown-content">
        <a href="#">Profil Akun</a>
        <a href="#">Logout</a>
      </div>
    </div>

    {{-- User icon --}}
    <span class="user-icon">👤</span>
  </nav>
</header>
