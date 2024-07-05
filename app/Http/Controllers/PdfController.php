<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function show($file)
    {
        // Construct the path
        $path = storage_path('app/public/pengajuan_prodi/' . $file);

        // Check if the file exists
        if (!file_exists($path)) {
            abort(404, 'File not found.');
        }

        // Get the file content
        $fileContent = file_get_contents($path);

        // Set headers to display the file inline
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($path) . '"',
        ];

        // Return the response
        return response($fileContent, 200, $headers);
    }
}

