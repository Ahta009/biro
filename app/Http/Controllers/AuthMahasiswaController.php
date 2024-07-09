<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthMahasiswaController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-mahasiswa');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        $user = UserMahasiswa::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('/dashboard-mahasiswa');
        }

        return back()->withErrors([
            'username' => 'Invalid credentials',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login-mahasiswa');
    }
}
