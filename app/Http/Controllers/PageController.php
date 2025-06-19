<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ← ini penting

class PageController extends Controller
{
    public function awal()
    {
        return view('awal');
    }
    public function signUp()
{
    return view('register'); // pastikan ada file `resources/views/register.blade.php`
}

}
