<?php

namespace App\Http\Controllers;

use App\Models\Rencana;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    public function index(){   
        return view('rencana.index', [
            'rencanas' => Rencana::all()
        ]);
    }
    public function show(Rencana $rencana){
        return view('rencana.show', ['rencana' => $rencana]);
    }
    public function create(){
        return view('rencana.store');        
    }
    public function store(Request $request){
        //dd($request);
        $formFields['rencana_status'] = 'Pending';

        $formFields = $request->validate([
            'rencana_judul' => 'required',
            'rencana_berkas' => 'required',
            'rencana_jenis' => 'required',
        ],[
                'rencana_judul.required' => 'Judul Wajib Diisi',
                'rencana_berkas.required' => 'Berkas Wajib Diisi',
                'rencana_jenis' => 'Jenis Wajib Diise',
        ]);
        
        if($request->hasFile('rencana_berkas')){
            $formFields['rencana_berkas'] = $request->file('rencana_berkas')->store('pengajuan_rencana', 'public');
        }
        //dd($formFields);
        Rencana::create($formFields);

        return redirect('pemohon/rencana');
    }
}
