<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Menampilkan formulir pendaftaran kepada pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('form_pendaftaran');
    }

    // /**
    //  * Memproses data pendaftaran yang dikirimkan melalui formulir.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function register(Request $request)
    // {
    //     try {
    //         // 1. Validasi Data
    //         // Definisi aturan validasi untuk setiap field.
    //         $validator = Validator::make($request->all(), [
    //             'name' => 'required|string|max:255', // Nama harus diisi, string, maks 255 karakter
    //             'email' => 'required|string|email|max:255|unique:users', // Email harus diisi, format email, unik di tabel 'users'
    //             'password' => 'required|string|min:8|confirmed', // Password minimal 8 karakter dan harus dikonfirmasi (ada field password_confirmation)
    //         ]);

    //         // Jika validasi gagal, akan throw ValidationException
    //         $validator->validate();

    //     } catch (ValidationException $e) {
    //         // Tangani kegagalan validasi. Redirect kembali dengan error dan input lama.
    //         return redirect()->back()
    //                     ->withErrors($e->errors()) // Mengirimkan pesan error validasi
    //                     ->withInput(); // Mengembalikan input yang sudah diisi pengguna
    //     }

    //     // 2. Simpan Data ke Database
    //     try {
    //         // Membuat record baru di tabel 'users' menggunakan model User.
    //         // Pastikan properti fillable atau guarded sudah diatur di model User
    //         User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password), // Enkripsi password menggunakan bcrypt
    //         ]);

    //     } catch (\Exception $e) {
    //         // Tangani error jika terjadi masalah saat menyimpan ke database (misal: koneksi, duplikasi, dll.)
    //         return redirect()->back()
    //                     ->withInput()
    //                     ->with('error', 'Terjadi kesalahan saat menyimpan data. Mohon coba lagi.');
    //     }

    //     // 3. Redirect Setelah Berhasil
    //     // Mengarahkan pengguna ke route bernama 'pendaftaran.success'
    //     // dan membawa pesan sukses (flash message).
    //     return redirect()->route('pendaftaran.success')->with('success', 'Pendaftaran berhasil! Silakan login.');
    // }
}