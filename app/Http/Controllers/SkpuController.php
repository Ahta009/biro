<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkpuController extends Controller
{
    public function index(){
        return view('skpu.index');
    }
    public function show(){
        return view('skpu.pemohon.index');
    }
    public function create()
    {
        $programs = Program::all();
        return view('admin.program.store', compact('programs'));
    }
    public function store(Request $request){
        //dd($request);
        $request->validate([
            'program_nama' => 'required',
            'parent_id' => 'nullable|exists:programs,id'
        ]);

        Program::create([
            'program_nama' => $request->program_nama,
            'parent_id' => $request->parent_id,
        ]);
        return redirect('admin/program/store');
    }

    public function showLoginForm()
    {
        return view('skpu.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'skpu_username' => 'required',
            'skpu_password' => 'required',
        ]);

        $credentials = $request->only('skpu_username', 'skpu_password');

        if (Auth::guard('skpu')->attempt(['skpu_username' => $credentials['skpu_username'], 'password' => $credentials['skpu_password']])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'skpu_username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('skpu')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/skpu/login');
    }
}
