<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran - Gema Music School</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <main class="main-content">
        <div class="payment-box">
            <h2>Masukan Kode Pembayaran</h2>
            <!-- <input type="text" id="paymentCode" placeholder="Masukkan kode di sini" /> -->
            <input type="text" id="paymentCode" name="paymentCode" placeholder="Masukkan kode pembayaran" required
                pattern="[0-9]{12}" title="Kode pembayaran harus 12 digit angka" />
            <button id="submitPaymentCode">Masuk</button>
        </div>
    </main>
    @include('layouts.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>