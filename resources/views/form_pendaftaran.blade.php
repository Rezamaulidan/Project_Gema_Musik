<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran - Gema Music School</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header class="main-header">
        <div class="header-left">
            <img src="{{ asset('images/logo.png') }}" alt="Deskripsi Gambar" width="50" height="40">
            <!-- <img src="jalur/ke/logo_not_musik_anda.png" alt="Logo Gema Music School" class="logo-placeholder" /> -->
            <h1>Gema Music School Yogyakarta</h1>
        </div>
        <div class="header-right">
            <span class="user-icon">👤</span>
        </div>
    </header>

    <nav class="main-nav">
        <ul>
            <li><a href="#">Beranda</a></li>
            <li> </li>
            <li class="dropdown">
                <a href="#">Produk <span class="arrow-down"></span></a>
                <ul class="submenu">
                    <li><a href="#">Produk A</a></li>
                    <li><a href="#">Produk B</a></li>
                    <li class="dropdown-submenu">
                        <a href="#">Produk C <span class="arrow-right"></span></a>
                        <ul class="sub-submenu">
                            <li><a href="#">Sub Produk C1</a></li>
                            <li><a href="#">Sub Produk C2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> </li>
            <li class="dropdown">
                <a href="#">Pendaftaran<span class="arrow-down"></span></a>
                <ul class="submenu">
                    <li><a href="#">formulir</a></li>
                    <li><a href="#">informasi</a></li>
                </ul>
            </li>
            <li> </li>
            <li><a href="#">Layanan</a></li>
            <li> </li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="payment-box">
            <h2>Masukan Kode Pembayaran</h2>
            <input type="text" id="paymentCode" placeholder="Masukkan kode di sini" />
            <button id="submitPaymentCode">Masuk</button>
        </div>
    </main>

    <footer class="main-footer">
        <p>&copy; 2025 Gema Music School. Hak cipta dilindungi.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>