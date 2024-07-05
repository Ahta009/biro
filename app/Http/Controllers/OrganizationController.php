<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index(){   
        return view('admin.organisasi.index', [
            'organisasis' => Organisasi::all()
        ]);
    }
    public function edit(Organisasi $organisasi){
        return view('admin.organisasi.edit', ['organisasi' => $organisasi]);
    }
    public function update(Request $request, Organisasi $organisasi){
        
        //dd($request);

        $formFields = $request->validate([
            'judul_kegiatan' => 'required',
            'status_kegiatan' => 'required',
            'keterangan_kegiatan' => 'required',
        ],[
                'judul_kegiatan.required' => 'Judul Wajib Diisi',
                'status_kegiatan.required' => 'Status Belum Dipilih',
                'keterangan_kegiatan.required' => 'Keterangan Wajib Diisi',
        ]);



        $organisasi->update($formFields);

        return redirect('admin/organisasi')->with('message', 'Listing updated Succesfully');
    }
}
