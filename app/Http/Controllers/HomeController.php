<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $schoolInfo = [
            'name' => 'Gema Music School Yogyakarta',
            'slogan' => 'From keys to strings, let your passion sings',
            'desc' => 'Gema Music School adalah harmoni dari mimpi dan melodi, tempat di mana setiap nada menjadi jembatan menuju ekspresi diri yang mendalam. Di sinilah suara hati menemukan iramanya, dan jemari kecil belajar menari di atas tuts dan senar. Lebih dari sekadar sekolah musik, Gema adalah ruang kreatif penuh semangat, di mana bakat diasah, passion dipupuk, dan keberanian untuk tampil tumbuh seiring waktu.'
        ];

        return view('home', compact('schoolInfo'));
    }
}
