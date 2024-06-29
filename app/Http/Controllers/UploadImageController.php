<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        // Handle image upload logic
        // Store the uploaded image and return its path or URL
        // Example:
        $path = $request->file('image')->store('images', 'public');
        return response()->json(['imagePath' => asset('storage/' . $path)]);
    }
}
