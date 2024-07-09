<?php

namespace App\Http\Controllers;

use App\Models\Rencana;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){   
        return view('admin.rencana.index', [
            'rencanas' => Rencana::all()
        ]);
    }
    public function edit(Rencana $rencana){
        return view('admin.rencana.edit', ['rencana' => $rencana]);
    }
    public function update(Request $request, Rencana $rencana){
        
        //dd($request);

        $formFields = $request->validate([
            'rencana_judul' => 'required',
            'rencana_status' => 'required',
            'rencana_keterangan' => 'required',
        ],[
                'rencana_judul.required' => 'Judul Wajib Diisi',
                'rencana_status.required' => 'Status Belum Dipilih',
                'rencana_keterangan.required' => 'Keterangan Wajib Diisi',
        ]);

        $rencana->update($formFields);

        return redirect('admin/rencana')->with('message', 'Listing updated Succesfully');
    }
}
