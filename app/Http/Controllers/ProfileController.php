<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Affiche le profil de l'utilisateur authentifié.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // Récupère l'utilisateur actuellement authentifié
        $user = Auth::user();
        
        // Retourne la vue du profil avec les informations de l'utilisateur
        return view('profile.show', compact('user'));
    }

    /**
     * Affiche le formulaire d'édition du profil.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        // Récupère l'utilisateur actuellement authentifié
        $user = Auth::user();
        
        // Retourne la vue d'édition du profil avec les informations de l'utilisateur
        return view('profile.edit', compact('user'));
    }

    /**
     * Met à jour les informations du profil de l'utilisateur.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // Récupère l'utilisateur actuellement authentifié
        $user = Auth::user();

        // Valide les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            // Nom de l'utilisateur, requis et doit être une chaîne de caractères avec une longueur maximale de 255 caractères
            'prenom' => 'required|string|max:255',
            // Prénom de l'utilisateur, requis et doit être une chaîne de caractères avec une longueur maximale de 255 caractères
            'username' => 'required|string|max:25|unique:users,username,' . $user->id,
            // Nom d'utilisateur requis, unique dans la table 'users', sauf pour l'utilisateur actuel
            'password' => 'nullable|string|min:8',
            // Mot de passe facultatif, doit être une chaîne de caractères avec une longueur minimale de 8 caractères
        ]);

        // Met à jour les informations de l'utilisateur
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->username = $request->username;

        // Si un nouveau mot de passe est fourni, le hache avant de l'enregistrer
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Sauvegarde les modifications dans la base de données
        $user->save();

        // Redirige vers la page du profil avec un message de succès
        return redirect()->route('profile.show')->with('success', 'Profil mis à jour avec succès.');
    }
}
