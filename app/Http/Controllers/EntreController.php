<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\EntreEngin;
use App\Models\Critere;
use App\Models\Engin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntreController extends Controller
{
    /**
     * Affiche une liste des sorties d'engins.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupère tous les enregistrements de la table `EntreEngin`
        $entre_engins = EntreEngin::paginate(2); 

        // Passe les données à la vue
        return view('assistant.EntreEngin', compact('entre_engins'));
    }

    /**
     * Affiche le formulaire pour créer une nouvelle sortie d'engin.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criteria = Critere::all();
        $engins = Engin::all();
        return view('assistant.CreateEntre', compact('criteria','engins'));
    }

    /**
     * Enregistre une nouvelle sortie d'engin dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'engin_id' => 'required|integer',
        // 'criteria' => 'required|array',
        'description' => 'required|string',
        'matricule' => 'required|string',
        'societe' => 'required|string',
        'nom_conducteur' => 'required|string',
        'prenom_conducteur' => 'required|string',
        'observation' => 'nullable|string',
        'compteur_valeur' => 'required|integer',
    ]);

    // Traitement des critères
    $criteria = $request->input('criteria'); // Ceci devrait être un tableau d'ID et de valeurs

    foreach ($criteria as $critere_id => $value) {
        if ($value === 'Yes') {
            // Enregistrement pour chaque critère avec une valeur 'Yes'
            EntreEngin::create([
                'engin_id' => $request->input('engin_id'),
                // 'critere_id' => $critere_id,
                'description' => $request->input('description'),
                'matricule' => $request->input('matricule'),
                'societe' => $request->input('societe'),
                'nom_conducteur' => $request->input('nom_conducteur'),
                'prenom_conducteur' => $request->input('prenom_conducteur'),
                'observation' => $request->input('observation'),
                'compteur_valeur' => $request->input('compteur_valeur'),
            ]);
        }
    }

    return redirect()->route('entre.index')->with('success', 'Engin enregistré avec succès');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $EntreEngin = EntreEngin::with('engin')->findOrFail($id);
        return view('assistant.EntreShow', compact('EntreEngin'));
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
