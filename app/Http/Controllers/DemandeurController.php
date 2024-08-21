<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;

class DemandeurController extends Controller
{
    // Méthode pour obtenir la somme des demandes
    public function getSumDemandes()
    {
        $sum = Demande::count(); // Compte le nombre total de demandes
        return response()->json(['sum' => $sum]);
    }

    // Méthode pour obtenir les dernières demandes affectées
    public function getLatestDemandes()
    {
        $latest = Demande::whereHas('traitements')->orderBy('created_at', 'desc')->take(5)->select('Entite', 'Poste', 'DateSortie', 'Shift') ->get();
    
        return response()->json(['latest' => $latest]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latest = Demande::latest()->take(3)->get(); 
        return view('demandeur.dashboard', compact('latest'));
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
