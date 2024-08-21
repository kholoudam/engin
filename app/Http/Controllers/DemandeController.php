<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Demande;
use App\Models\DetailDemande;
use App\Models\Engin;
use App\Models\Traitement;
use App\Models\EnginDemande;

class DemandeController extends Controller
{
    /**
     * Affiche une liste paginée des demandes avec leurs détails.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Récupère toutes les demandes avec leurs détails associés et les pagine par 4 éléments par page
        $demandes = Demande::with('detailDemandes')->paginate(3);

        // Retourne la vue avec les données des demandes
        return view('demandeur.demande', compact('demandes'));
    }    

    /**
     * Affiche le formulaire pour créer une nouvelle demande.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Récupérer tous les engins de la base de données
        $engins = Engin::all();

        // Passer les engins à la vue
        // Retourne la vue de création de demande
        return view('demandeur.create', compact('engins'));
    }

    /**
     * Stocke une nouvelle demande dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    //crud laravel ne pas insérer un champ dans le contrôleur et le laisser null
    public function store(Request $request)
    {
        // Valide les données du formulaire
        $request->validate([
            'Entite' => 'required|string|max:255',
            'Poste' => 'required|string|max:255',
            'Shift' => 'required|string|max:255',
            'FamilleEngin' => 'required|exists:engins,id', // Assurez-vous que 'engin' est la bonne table
            'TypeEngin' => 'required|string|max:255',
            'Quantite' => 'required|integer',
            'RaisonDemande' => 'required|string|max:255',
        ]);

        // Récupérer l'engin à partir de l'ID
        $engin = Engin::find($request->FamilleEngin);

        // Vérifier si l'engin a été trouvé
        if (!$engin) {
            return redirect()->back()->withErrors(['FamilleEngin' => 'L\'engin sélectionné n\'existe pas.']);
        }

        // Crée une nouvelle demande dans la table 'demande'
        $demande = Demande::create([
            'Entite' => $request->Entite,
            'Poste' => $request->Poste,
            'DateSortie' => now()->toDateString(),
            'Shift' => $request->Shift,
            'utilisateur_id' => Auth::id(), // Enregistre l'ID de l'utilisateur qui a créé la demande
        ]);

        // Crée une nouvelle entrée dans la table 'traitement'
        Traitement::create([
            'Demande_id' => $demande->id,
            'utilisateur_id' => Auth::id(), // Enregistre l'ID de l'utilisateur qui a créé la demande
        ]);
        
        // Crée les détails de la demande dans la table 'detail_demande'
        DetailDemande::create([
            'Demande_id' => $demande->id,
            'FamilleEngin' => $engin->Nom, // Utilise le nom de l'engin
            'TypeEngin' => $request->TypeEngin,
            'Quantite' => $request->Quantite,
            'RaisonDemande' => $request->RaisonDemande,
        ]);

        // Crée une nouvelle entrée dans la table 'engin_demandes'
        EnginDemande::create([
            'Demande_id' => $demande->id,
            'Engin_id' => $engin->id,
        ]);

        // Redirige vers la liste des demandes avec un message de succès
        return redirect()->route('demandes.index')->with('success', 'Demande créée avec succès.');
    }
    
    /**
     * Affiche les détails d'une demande spécifique.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Récupère la demande avec ses détails associés
        $demande = Demande::with('detailDemandes')->findOrFail($id);
        
        // Retourne la vue avec les détails de la demande
        return view('demandeur.ShowDemande', compact('demande'));
    }

    /**
     * Affiche le formulaire pour éditer une demande spécifique.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Trouve la demande par ID
        $demande = Demande::findOrFail($id);
    
        // Trouve les détails de la demande par ID
        $detailDemande = DetailDemande::where('Demande_id', $id)->firstOrFail();
    
        // Récupérer tous les engins de la base de données
        $engins = Engin::all();
    
        // Passer les données à la vue
        return view('demandeur.edit', compact('demande', 'detailDemande', 'engins'));
    }     

    /**
     * Met à jour une demande spécifique dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Valide les données du formulaire
        $validatedData = $request->validate([
            'Entite' => 'required|string|max:255',
            'Poste' => 'required|string|max:255',
            'Shift' => 'required|string|max:255',
            'FamilleEngin' => 'required|exists:engins,id',
            'TypeEngin' => 'required|string|max:255',
            'Quantite' => 'required|integer',
            'RaisonDemande' => 'required|string|max:255',
        ]);
        // Trouve la demande par ID
        $demande = Demande::findOrFail($id);    
        // Met à jour les données de la demande
        $demande->update([
            'Entite' => $validatedData['Entite'],
            'Poste' => $validatedData['Poste'],
            'Shift' => $validatedData['Shift'],
            'DateSortie' => now()->toDateString(), // Met à jour DateSortie à la date actuelle
        ]);
        // Récupérer l'engin à partir de l'ID
        $engin = Engin::find($validatedData['FamilleEngin']);
        // Met à jour les détails de la demande
        $detailDemande = DetailDemande::where('Demande_id', $id)->firstOrFail();
        $detailDemande->update([
            'FamilleEngin' => $engin->Nom, // Utilise le nom de l'engin
            'TypeEngin' => $validatedData['TypeEngin'],
            'Quantite' => $validatedData['Quantite'],
            'RaisonDemande' => $validatedData['RaisonDemande'],
        ]);
        // Met à jour l'engin demande
        $enginDemande = EnginDemande::where('Demande_id', $id)->firstOrFail();
        $enginDemande->update([
            'Demande_id' => $demande->id,
            'Engin_id' => $engin->id,
        ]);
        // Redirige vers la liste des demandes avec un message de succès
        return redirect()->route('demandes.index')->with('success', 'Demande mise à jour avec succès.');
    }      

    /**
     * Supprime une demande spécifique ainsi que ses détails associés.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Trouve la demande par ID
        $demande = Demande::findOrFail($id);

        // Supprime les détails associés à cette demande
        $demande->detailDemandes()->delete();

        // Supprime la demande
        $demande->delete();

        // Redirige vers la liste des demandes avec un message de succès
        return redirect()->route('demandes.index')->with('success', 'Demande supprimée avec succès.');
    }
}
