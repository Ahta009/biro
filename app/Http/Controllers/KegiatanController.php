<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){   
        $agendas = Agenda::paginate(8);
        return view('agenda.index', compact('agendas'));
    }

    public function show(Agenda $agenda){
        $nextAgenda = Agenda::where('id', '>', $agenda->id)->orderBy('id')->first();
        $previousAgenda = Agenda::where('id', '<', $agenda->id)->orderBy('id', 'desc')->first();

        $recentAgendas = Agenda::orderBy('created_at', 'desc')->take(8)->get();
        
        return view('agenda.detail', compact('agenda', 'nextAgenda', 'previousAgenda', 'recentAgendas'));

    }
}
