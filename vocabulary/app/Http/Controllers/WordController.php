<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\French;  // Correct namespace for French model
use App\Models\Turkish;  // Correct namespace for Turkish model

class WordController extends Controller
{
    public function store(Request $request)
    {
        $french = French::create(['word' => $request->french]);
        $meanings = explode(',', $request->turkish);
        foreach ($meanings as $meaning) {
            $turkish = Turkish::create(['word' => trim($meaning)]);
            $french->turkish()->attach($turkish->id);
        }
        return response()->json(['message' => 'Word added successfully.']);
    }

    public function index()
{
    $words = French::with('turkish')->get();
    return response()->json($words);
}

}
