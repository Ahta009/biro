<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(){   
        $notices = Notice::paginate(8);
        return view('pengumuman.index', compact('notices'));
    }

    public function show(Notice $notice){
        $nextNotice = Notice::where('id', '>', $notice->id)->orderBy('id')->first();
        $previousNotice = Notice::where('id', '<', $notice->id)->orderBy('id', 'desc')->first();

        $recentNotices = Notice::orderBy('created_at', 'desc')->take(8)->get();
        
        return view('pengumuman.detail', compact('notice', 'nextNotice', 'previousNotice', 'recentNotices'));

    }
}
