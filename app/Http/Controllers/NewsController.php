<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(){   
        return view('admin.news.index', [
            'newss' => News::all()
        ]);
    }
    public function create(){
        return view('admin.news.store');        
    }
    public function store(Request $request){
        
        $formFields = $request->validate([
            'news_title' => 'required|string|max:255',
            'news_description' => 'required|string',
            'news_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->hasFile('news_image')){
            $formFields['news_image'] = $request->file('news_image')->store('news-images', 'public');
        }

        News::create($formFields);
        
        return redirect('admin/news')->with('message', 'Notice created successfully');
    }
    public function edit(News $news){
        return view('admin.news.edit', ['news' => $news]);
    }
    public function update(Request $request, News $news){
        //dd($news);
        $formFields = $request->validate([
            'news_title' => 'required',
            'news_description' => 'nullable',
            'news_image' => 'nullable',
        ],[
                'news_title.required' => 'Judul Wajib Diisi',
        ]);

        $news->update($formFields);

        // Session::flash('message', 'Listing Created');

        return redirect('admin/news')->with('message', 'Listing updated Succesfully');
    }
    public function destroy(News $news){
        //make sure logged in user is owner
         $news->delete();
         return redirect('admin/news')->with('message', 'Listing Deleted Succesfully');
     }
    public function search(Request $request){
        $query = $request->input('query');
        $news = News::where('news_title', 'LIKE', "%{$query}%")->get();

        return response()->json($news);
    }
}
