<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi dan proses login di sini
        // Contoh validasi sederhana:
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/'); // atau ke dashboard
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}