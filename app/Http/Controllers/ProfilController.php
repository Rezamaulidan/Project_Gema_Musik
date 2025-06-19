<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil pengguna
     */
    public function index()
    {
        // Ambil data profil pertama dari database
        $profil = Profil::first();

        // Kirim ke view profil.blade.php
        return view('profil', compact('profil'));
    }
}
