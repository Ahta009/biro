<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\MahasiswaUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function show()
    {
        return view('auth.mahasiswa.registrasi');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255',
            'tahun_masuk' => 'required|integer',
            'username' => 'required|string|max:255|unique:mahasiswa_users',
            'password' => 'required|string|min:8|confirmed',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Begin transaction
        DB::beginTransaction();

        try {
            // Create the user account
            $user = MahasiswaUser::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            // Handle photo upload if present
            $fotoPath = null;
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('mahasiswa-images', 'public');
            }

            // Create Mahasiswa record with user_id
            Mahasiswa::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'tahun_masuk' => $request->tahun_masuk,
                'foto' => $fotoPath,
                'user_id' => $user->id,
            ]);

            // Commit the transaction
            DB::commit();

            // Redirect to login page with success message
            return redirect()->route('beranda')->with('success', 'Registration successful! Please login.');

        } catch (\Exception $e) {
            dd($e);
            // Rollback the transaction on error
            DB::rollBack();

            // Redirect back with error message
            return redirect()->back()->withErrors(['error' => 'Failed to register. Please try again.']);
        }
    }
}
