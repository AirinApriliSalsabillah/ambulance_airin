<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $nama = $request->nama ;
        // Membuat user baru
        User::create([
            'nama' => $nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "user", // Set default role jika diperlukan
        ]);

        // Redirect atau kirim respon
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Coba autentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Ambil data user yang sedang login
            $user = Auth::user();
        
            // Cek role user
            if ($user->role == "user") {
                // Role 0: User biasa, arahkan ke halaman landing
                return redirect('/user')->with('success', 'Selamat datang, ' . $user->name . '!');
            } elseif ($user->role == "admin") {
                // Role 1: Admin, arahkan ke halaman admin
                return redirect('/admin')->with('success', 'Selamat datang, Admin ' . $user->name . '!');
            }
        }

        // Jika kredensial tidak cocok, kembali ke halaman login dengan pesan error
        return redirect()
            ->back()
            ->withErrors(['email' => 'Email atau password salah.'])
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda berhasil logout');
    }
}
