<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){   
        return view('admin.agenda.index', [
            'agendas' => Agenda::all()
        ]);
    }
    public function create(){
        return view('admin.agenda.store');        
    }
    public function store(Request $request){
        
        $formFields = $request->validate([
            'agenda_title' => 'required',
            'agenda_audiens' => 'required',
            'agenda_description' => 'nullable',
            'agenda_image' => 'nullable',
        ],[
                'agenda_title.required' => 'Judul Wajib Diisi',
                'agenda_audiens.required' => 'Audiensi Wajib Diisi',
        ]);

        if($request->hasFile('agenda_image')){
            $formFields['agenda_image'] = $request->file('agenda_image')->store('agenda-images', 'public');
        }
        //dd($formFields);
        Agenda::create($formFields);

        return redirect('admin/agenda');
    }
    public function edit(Agenda $agenda){
        return view('admin.agenda.edit', ['agenda' => $agenda]);
    }
    public function update(Request $request, Agenda $agenda){
        
        $formFields = $request->validate([
            'agenda_title' => 'required',
            'agenda_audiens' => 'required',
            'agenda_description' => 'nullable',
            'agenda_image' => 'nullable',
        ],[
                'agenda_title.required' => 'Judul Wajib Diisi',
                'agenda_audiens.required' => 'Audiensi Wajib Diisi',
        ]);

        $agenda->update($formFields);

        // Session::flash('message', 'Listing Created');

        return redirect('admin/agenda')->with('message', 'Listing updated Succesfully');
    }
    public function destroy(Agenda $agenda){
        //make sure logged in user is owner
         $agenda->delete();
         return redirect('admin/agenda')->with('message', 'Listing Deleted Succesfully');
     }
    public function search(Request $request){
        $query = $request->input('query');
        $agenda = Agenda::where('agenda_title', 'LIKE', "%{$query}%")->get();

        return response()->json($agenda);
    }
}
