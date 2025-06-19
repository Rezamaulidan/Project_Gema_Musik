<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gema Music School Yogyakarta</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>

<body>
    @include('layouts.header')
    @include('layouts.navbar')

    <section class="hero">
        <h1>From keys to strings, let your passion sings</h1>
        <p>Harmonize, mesmerize, let your sound rise ♫</p>
    </section>

    <section class="content">
        <h2>Kenapa memilih kami?</h2>
        <p>
            Gema Music School adalah harmoni dari mimpi dan melodi, tempat di mana setiap nada menjadi jembatan menuju
            ekspresi diri yang mendalam.
            Di sinilah suara hati menemukan iramanya, dan jemari kecil belajar menari di atas tuts dan senar.
            Lebih dari sekadar sekolah musik, Gema adalah ruang kreatif penuh semangat, di mana bakat diasah, passion
            dipupuk, dan keberanian untuk tampil tumbuh seiring waktu.
        </p>
    </section>

    @include('layouts.footer')

</body>

</html>