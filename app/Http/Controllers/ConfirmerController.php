<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Affectation;
use App\Models\Demande;
use App\Models\DetailDemande;
use App\Models\Engin;
use App\Models\Utilisateur;
use App\Models\Traitement;

class ConfirmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer les affectations avec leur engin
        $affectations = Affectation::with('engin')->paginate(2);

        // Récupérer les traitements avec les utilisateurs et les demandes
        $traitements = Traitement::with('utilisateur', 'demande')->get();
    
        return view('assistant.SortieEngin', compact('affectations', 'traitements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $affectation = Affectation::with('engin')->findOrFail($id);
        $traitements = Traitement::all();
        return view('assistant.confirmation', compact('affectation', 'traitements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Récupérer l'affectation avec ses relations
        $affectation = Affectation::findOrFail($request->input('affectation_id'));
        
        // Mettre à jour la date de sortie dans la table demande
        $demande = $affectation->demande;
        if ($demande) {
            $demande->dateSortie = now();  // Mettre à jour avec la date actuelle
            $demande->save();
        }
    
        // Supprimer l'entrée correspondante dans engin_affectes
        DB::table('engin_affectes')->where('Affectation_id', $affectation->id)->delete();
    
        // Supprimer l'affectation elle-même
        $affectation->delete();
    
        // Rediriger l'utilisateur avec un message de succès
        return redirect()->route('sortie.index')->with('success', 'Sortie de l\'engin confirmée et affectation supprimée.');
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
