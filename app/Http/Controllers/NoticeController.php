<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){   
        return view('admin.notice.index', [
            'notices' => Notice::all()
        ]);
    }
    public function create(){
        return view('admin.notice.store');        
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('notice-images', 'public');
        }

        Notice::create($formFields);
        
        return redirect('admin/notice')->with('message', 'Notice created successfully');
    }
    public function edit(Notice $notice){
        return view('admin.notice.edit', ['notice' => $notice]);
    }
    public function update(Request $request, Notice $notice){
        
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
        ],[
                'title.required' => 'Judul Wajib Diisi',
        ]);

        $notice->update($formFields);

        // Session::flash('message', 'Listing Created');

        return redirect('admin/notice')->with('message', 'Listing updated Succesfully');
    }
    public function destroy(Notice $notice){
        //make sure logged in user is owner
         $notice->delete();
         return redirect('admin/notice')->with('message', 'Listing Deleted Succesfully');
     }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $notices = Notice::where('title', 'LIKE', "%{$query}%")->get();

        return response()->json($notices);
    }
 
}
