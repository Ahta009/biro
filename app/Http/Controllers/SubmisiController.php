<?php

namespace App\Http\Controllers;

use App\Models\Submisi;
use Illuminate\Http\Request;

class SubmisiController extends Controller
{
    public function index(){   
        return view('submisi.index', [
            'submisis' => Submisi::all()
        ]);
    }
    public function show(Submisi $submisi){
        return view('submisi.show', ['submisi' => $submisi]);
    }
    public function create(){
        return view('submisi.store');        
    }
    public function store(Request $request){
        
        $formFields = $request->validate([
            'judul_prodi' => 'required',
            'berkas_prodi' => 'required',
        ],[
                'judul_prodi.required' => 'Keterangan Wajib Diisi',
                'berkas_prodi.required' => 'Berkas Wajib Diisi',
        ]);

        if($request->hasFile('berkas_prodi')){
            $formFields['berkas_prodi'] = $request->file('berkas_prodi')->store('pengajuan_prodi', 'public');
        }
        //dd($formFields);
        Submisi::create($formFields);

        return redirect('admin/submisi');
    }
}
