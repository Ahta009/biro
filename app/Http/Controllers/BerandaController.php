<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Agenda;
use App\Models\Notice;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){   
        $agendas = Agenda::latest()->take(4)->get();
            foreach ($agendas as $item) {
                $item->formatted_month = Carbon::parse($item->agenda_tanggal)->format('M'); // Add formatted month to each item
                $item->formatted_day = Carbon::parse($item->agenda_tanggal)->format('d'); // Add formatted day to each item
            }
        $notices = Notice::latest()->take(8)->get();
        $newss = News::latest()->take(4)->get();
        return view('beranda.home2', compact('agendas', 'notices', 'newss'));
    }
}
