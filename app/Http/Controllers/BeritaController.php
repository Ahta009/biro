<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){   
        $newss = News::paginate(8);
        return view('berita.index', compact('newss'));
    }

    public function show(News $news){
        $nextNews = News::where('id', '>', $news->id)->orderBy('id')->first();
        $previousNews = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();

        $recentNewss = News::orderBy('created_at', 'desc')->take(8)->get();
        
        return view('berita.detail', compact('news', 'nextNews', 'previousNews', 'recentNewss'));

    }
}
