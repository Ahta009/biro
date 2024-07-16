<?php

namespace App\Http\Controllers;

use App\Models\Skpu;
use App\Models\Program;
use Illuminate\Http\Request;

class skpu_programsController extends Controller
{
    public function create()
    {
        $skpus = Skpu::all();
        $programs = Program::whereNull('parent_id')->get();
        return view('admin.skpu.store', compact('skpus', 'programs'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'skpu_id' => 'required|exists:skpus,id',
            'program_id' => 'required|exists:programs,id',
            'harga_satuan' => 'nullable|integer',
            'volume' => 'nullable|integer',
            'jumlah' => 'required|integer',
        ]);

        $skpu = Skpu::find($request->skpu_id);
        $skpu->programs()->attach($request->program_id, [
            'harga_satuan' => $request->harga_satuan,
            'volume' => $request->volume,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('assign.program.create')->with('success', 'Program assigned to SKPU successfully.');
    }
    public function getChildPrograms($parent_id)
    {
        $childPrograms = Program::where('parent_id', $parent_id)->get();
        return response()->json($childPrograms);
    }
}
