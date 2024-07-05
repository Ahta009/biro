<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function index(){   
        return view('organisasi.index', [
            'organisasis' => Organisasi::all()
        ]);
    }
    public function show(Organisasi $organisasi){
        return view('organisasi.show', ['organisasi' => $organisasi]);
    }
    public function create(){
        return view('organisasi.store');        
    }
    public function store(Request $request){
        
        $formFields = $request->validate([
            'judul_kegiatan' => 'required',
            'proposal_kegiatan' => 'required',
        ],[
                'judul_kegiatan.required' => 'Keterangan Wajib Diisi',
                'proposal_kegiatan.required' => 'Berkas Wajib Diisi',
        ]);

        if($request->hasFile('proposal_kegiatan')){
            $formFields['proposal_kegiatan'] = $request->file('proposal_kegiatan')->store('pengajuan_organisasi', 'public');
        }
        //dd($formFields);
        Organisasi::create($formFields);

        return redirect('pemohon/organisasi');
    }
}
