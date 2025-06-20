<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gema Music School Yogyakarta</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  {{-- include header --}}
  @include('layouts.header')

  {{-- konten spesifik halaman --}}
  @yield('content')

  {{-- include footer --}}
  @include('layouts.footer')

</body>
</html>
