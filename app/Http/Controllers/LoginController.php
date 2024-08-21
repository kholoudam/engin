<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Affiche la vue de connexion.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('login.show');
    }

    /**
     * Gère la connexion d'un utilisateur.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Récupère les informations de connexion depuis la requête
        $username = $request->username;
        $password = $request->password;
        $credentials = ['username' => $username, 'password' => $password];

        // Tente de connecter l'utilisateur avec les informations fournies
        if(Auth::attempt($credentials))
        {
            // Si la connexion est réussie, régénère la session pour sécuriser l'utilisateur
            $request->session()->regenerate();

            // Récupère l'utilisateur authentifié
            $user = Auth::user();

            // Redirige l'utilisateur en fonction de son rôle
            if ($user->hasRole('admin')) {
                return to_route('admin.index')->with('success', 'Vous êtes connecté(e) avec succès '.$username);
            } elseif ($user->hasRole('technicien')) {
                return to_route('technicien.index')->with('success', 'Vous êtes connecté(e) avec succès '.$username);
            } elseif ($user->hasRole('assistante technique')) {
                return to_route('assistant.index')->with('success', 'Vous êtes connecté(e) avec succès '.$username);
            } elseif ($user->hasRole('demandeur')) {
                return to_route('demandeur.index')->with('success', 'Vous êtes connecté(e) avec succès '.$username);
            }

            // Redirige vers le tableau de bord par défaut si aucun rôle spécifique n'est trouvé
            return to_route('dashboard')->with('success', 'Vous êtes connecté(e) avec succès '.$username);
        }
        else
        {
            // Si la connexion échoue, retourne à la page de connexion avec les erreurs
            return back()->withErrors([
                'username' => 'Username incorrecte',
                'password' => 'Password incorrecte',
            ])->onlyInput('username', 'password');
        }
    }

    /**
     * Déconnecte l'utilisateur actuel.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // Déconnecte l'utilisateur
        Auth::logout();

        // Invalide la session actuelle et régénère le token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirige vers la page de connexion avec un message de succès
        return to_route('login.show')->with('success', 'Vous êtes déconnecté(e) avec succès');
    }
}
