@extends('layouts.app')

@section('content')
<h2 class="text-center text-3xl font-bold mb-4">{{ $program->nama_program }}</h2>
<p class="text-center text-gray-700 mb-8">{{ $program->deskripsi }}</p>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
  {{-- Gambar utama --}}
  <img src="{{ asset('images/' . $program->gambar) }}" class="w-full h-64 object-cover rounded shadow" alt="">
  <img src="{{ asset('images/' . $program->gambar) }}" class="w-full h-64 object-cover rounded shadow" alt="">
  <img src="{{ asset('images/' . $program->gambar) }}" class="w-full h-64 object-cover rounded shadow" alt="">
</div>
@endsection
