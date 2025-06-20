@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-10 rounded-xl mb-10 shadow-lg">
  <h2 class="text-3xl font-bold text-center mb-2">Program Unggulan Kami</h2>
  <p class="text-center text-lg">Temukan passion musik Anda melalui program berkualitas kami yang diajarkan oleh pengajar profesional</p>
</div>

<h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Pilih Program yang Anda Minati</h3>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 sm:px-0 max-w-5xl mx-5xl">
  @foreach($programs as $program)
    <a href="{{ route('program.show', $program->id) }}" class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 text-center">
      <img src="{{ asset($program->gambar) }}" alt="{{ $program->nama_program }}" class="w-1 h-1 object-cover mx-5 mb-4 rounded-full border" >
      <h4 class="text-lg font-bold text-indigo-700 mb-2">{{ $program->nama_program }}</h4>
      <p class="text-sm text-gray-600">{{ Str::limit($program->deskripsi, 60) }}</p>
    </a>
  @endforeach
</div>
@endsection
