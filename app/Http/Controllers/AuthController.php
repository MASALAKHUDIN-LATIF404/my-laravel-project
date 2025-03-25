<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil! Selamat datang kembali.');
        }

        // Perbaikan: Menampilkan pesan error yang benar
        return back()->withErrors([
            'email' => 'Login gagal! Periksa kembali akun Anda.',
        ])->onlyInput('email'); // Supaya email tetap terisi
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}