<?php
// app/Http/Controllers/PDFController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PDF;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function index()
    {
        return PDF::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',    
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);
    
        $pdf = $request->file('pdf');
        $path = $pdf->store('pdfs', 'public');
    
        $pdf = PDF::create([
            'path' => $path,
            'nom' => $request->nom, 
        ]);
    
        return response()->json($pdf, 201);
    }

    public function destroy($id)
    {
        $pdf = PDF::find($id);

        if (!$pdf) {
            return response()->json(['message' => 'PDF not found'], 404);
        }

        // Delete the file from storage
        Storage::disk('public')->delete($pdf->path);

        $pdf->delete();

        return response()->json(['message' => 'PDF deleted successfully'], 200);
    }
}

