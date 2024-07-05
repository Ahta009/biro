<?php

namespace App\Http\Controllers;

use App\Models\Submisi;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){   
        return view('admin.submisi.index', [
            'submisis' => Submisi::all()
        ]);
    }
    public function edit(Submisi $submisi){
        return view('admin.submisi.edit', ['submisi' => $submisi]);
    }
    public function update(Request $request, Submisi $submisi){
        
        $formFields = $request->validate([
            'judul_prodi' => 'required',
            'keterangan_prodi' => 'required',
            'status_prodi' => 'required',
        ],[
                'judul_prodi.required' => 'Judul Wajib Diisi',
                'keterangan_prodi.required' => 'Keterangan Wajib Diisi',
        ]);

        //dd($formFields);

        $submisi->update($formFields);

        return redirect('admin/submisi')->with('message', 'Listing updated Succesfully');
    }
}
