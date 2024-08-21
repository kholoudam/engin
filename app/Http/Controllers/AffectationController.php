<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Demande;
use App\Models\DetailDemande;
use App\Models\Engin;
use App\Models\Utilisateur;
use App\Models\Critere;
use App\Models\Detail;
use App\Models\EnginAffecte;
use App\Models\EnginDemande;
use App\Models\Traitement;
use Illuminate\Support\Facades\DB;

class AffectationController extends Controller
{
    public function index()
    {
        // Récupérer les affectations avec leur engin
        $affectations = Affectation::with('engin')->paginate(2);
    
        // Récupérer les demandes avec les détails associés
        $demandes = Demande::with('detailDemandes')->paginate(2);
    
        // Récupérer les traitements avec les utilisateurs et les demandes
        $traitements = Traitement::with('utilisateur', 'demande')->get();
    
        return view('assistant.AffectationIndex', compact('affectations', 'demandes', 'traitements'));
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $demande = Demande::with('enginDemandes.engin')->findOrFail($id);
        $criteres = Critere::all();
        $EnginDemandes = $demande->enginDemandes;
    
        return view('assistant.AffectationCreate', compact('demande', 'criteres', 'EnginDemandes'));
    }
    
    /**
     * Stocke une nouvelle affectation dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $demandeId = $request->input('demande_id');
        $criteres = $request->input('criteres');
    
        // Vérifier si tous les critères sont cochés
        $allYes = true;
        foreach ($criteres as $critere) {
            if ($critere !== 'oui') {
                $allYes = false;
                break;
            }
        }
        if ($allYes) {
            // Obtenir l'engin lié à cette demande avec les relations chargées
            $enginDemande = EnginDemande::with('engin')->where('Demande_id', $demandeId)->first();
    
            if ($enginDemande && $enginDemande->engin) {
                $enginId = $enginDemande->Engin_id;
                // Créer une nouvelle affectation
                $affectation = new Affectation();
                $affectation->DateAffectation = now();
                $affectation->etat = 'active';
                $affectation->Engin_id = $enginId;
                $affectation->save();
                // Associer l'affectation à l'engin
                $enginAffecte = new EnginAffecte();
                $enginAffecte->Engin_id = $enginId;
                $enginAffecte->Affectation_id = $affectation->id;
                $enginAffecte->save();
                // Créer un nouveau traitement
                $traitement = new Traitement();
                $traitement->Demande_id = $demandeId;
                $traitement->utilisateur_id = auth()->id();
                $traitement->save();
                // Supprimer les enregistrements liés dans detail_demandes et engin_demandes
                DetailDemande::where('Demande_id', $demandeId)->delete();
                EnginDemande::where('Demande_id', $demandeId)->delete();
                Traitement::where('Demande_id', $demandeId)->delete();
                // Supprimer la demande après l'affectation
                $demande = Demande::find($demandeId);
                if ($demande) {
                    // Tentative de suppression
                    $deleted = $demande->delete();
                    
                    if ($deleted) {
                        // Suppression réussie
                        return redirect()->route('affectation.index')->with('success', 'Affectation créée avec succès et demande supprimée.');
                    } else {
                        // La demande n'a pas pu être supprimée
                        return redirect()->route('affectation.index')->with('error', 'La demande n\'a pas pu être supprimée.');
                    }
                } else {
                    // La demande n'existe pas
                    return redirect()->route('affectation.index')->with('error', 'La demande n\'existe pas.');
                }
                // Rediriger avec un message de succès
                return redirect()->route('affectation.index')->with('success', 'Affectation créée avec succès et demande supprimée.');
            } else {
                // Gérer le cas où l'engin associé à la demande n'existe pas
                return redirect()->route('affectation.index')->with('error', 'Aucun engin associé à cette demande.');
            }
        } else {
            // Si un critère est sélectionné avec "non", ajouter des entrées dans la table details
            foreach ($criteres as $critereId => $critereValue) {
                if ($critereValue === 'non') {
                    $detail = new Detail();
                    $detail->Description = "Critère non satisfait pour le critère ID : " . $critereId;
                    $detail->Critere_id = $critereId;
                    $enginDemande = EnginDemande::where('Demande_id', $demandeId)->first();
                    $detail->Engin_id = $enginDemande ? $enginDemande->Engin_id : null;
                    $detail->save();
                }
            }

            // Rediriger avec un message de succès
            return redirect()->route('affectation.index')->with('success', 'Détails ajoutés avec succès.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $affectation = Affectation::with('engin')->findOrFail($id);
        $traitements = Traitement::all(); // Ajustez ceci selon vos besoins
        return view('assistant.AffectationShow', compact('affectation', 'traitements'));
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
