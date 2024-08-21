<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EnginsController extends Controller
{
    // Affiche la liste des engins
    public function index()
    {
        $engins = Engin::paginate(2);
        return view('admin.EnginsIndex', compact('engins'));
    }


    // Montre le formulaire pour créer un nouvel engin
    public function create()
    {
        return view('admin.EnginsCreate');
    }

    // Stocke un nouvel engin dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:255',
            'Capacité' => 'required|integer',
            'Compteur' => 'required|integer',
            'Image' => 'nullable|string|max:255',
        ]);
    
        $data = $request->only(['Nom', 'Capacité', 'Compteur', 'Image']);
    
        Engin::create($data);
    
        return redirect()->route('GestionEngins.index')->with('success', 'Engin créé avec succès.');
    }    

    // Affiche un engin spécifique
    public function show($id)
    {
        $engin = Engin::findOrFail($id);
        return view('admin.EnginShow', compact('engin'));
    }

    // Montre le formulaire pour éditer un engin
    public function edit($id)
    {
        $engin = Engin::findOrFail($id);
        return view('admin.EnginsEdit', compact('engin'));
    }

    // Met à jour un engin spécifique dans la base de données
    public function update(Request $request, $id)
    {    
        $request->validate([
            'Nom' => 'required|string|max:255',
            'Capacité' => 'required|integer',
            'Compteur' => 'required|integer',
            'Image' => 'nullable|string|max:255',
        ]);
    
        $engin = Engin::findOrFail($id);
    
        $data = $request->only(['Nom', 'Capacité', 'Compteur', 'Image']);
    
        $engin->update($data);
    
        return redirect()->route('GestionEngins.index')->with('success', 'Engin mis à jour avec succès.');
    }
    

    // Supprime un engin spécifique de la base de données
    public function destroy($id)
    {
        $engin = Engin::findOrFail($id);
        $engin->delete();

        return redirect()->route('GestionEngins.index')->with('success', 'Engin supprimé avec succès.');
    }
}
