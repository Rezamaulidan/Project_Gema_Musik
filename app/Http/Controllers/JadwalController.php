<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // Tampilkan halaman jadwal kelas musik
    public function index()
    {
        // Misalnya ambil data jadwal dari database nanti
        return view('jadwal');
    }
}
