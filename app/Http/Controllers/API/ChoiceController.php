<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Choice $choice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Choice $choice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Choice $choice)
    {
        // On supprime l'utilisateur
        $choice->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
