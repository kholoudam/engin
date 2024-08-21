<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engin;
use App\Models\Detail;
use App\Models\Critere;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer uniquement les engins ayant des critères associés
        $engins = Engin::whereHas('details')
                        ->with(['details.critere'])
                        ->get();
    
        // Pour vérifier les données récupérées
        // dd($engins->toArray());
    
        return view('assistant.panne', compact('engins'));
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
