<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        Program::create([
            'nama_program' => 'Program Gitar',
            'deskripsi' => 'Belajar gitar dari dasar hingga mahir, teknik chord, fingerstyle, tapping, dan improvisasi.',
            'gambar' => 'images/gitar.jpg'
        ]);

        Program::create([
            'nama_program' => 'Program Piano',
            'deskripsi' => 'Kuasai teknik bermain piano klasik dan modern dengan pembimbing profesional.',
            'gambar' => 'images/piano.jpg'
        ]);

        Program::create([
            'nama_program' => 'Program Biola',
            'deskripsi' => 'Pelajari biola dari dasar hingga mahir untuk tampil di orkestra maupun solo.',
            'gambar' => 'images/biola.jpg'
        ]);

        Program::create([
            'nama_program' => 'Program Vokal',
            'deskripsi' => 'Kembangkan teknik vokal dan pernapasan agar bisa bernyanyi lebih merdu dan percaya diri.',
            'gambar' => 'images/vokal.jpg'
        ]);

        Program::create([
            'nama_program' => 'Program Drum',
            'deskripsi' => 'Belajar ritme dan teknik stick control untuk bermain drum di berbagai genre.',
            'gambar' => 'images/drum.jpg'
        ]);
    }
}
