<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorizeAdmin();

        // Exclure les administrateurs de la liste des utilisateurs
        $utilisateurs = Utilisateur::where('role', '!=', 'admin')->paginate(4);
        return view('admin.UtilisateurIndex', compact('utilisateurs'));
    }

    public function create()
    {
        $this->authorizeAdmin();
        return view('admin.UtilisateurCreate');
    }

    public function store(Request $request)
    {
        $this->authorizeAdmin();

        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:utilisateurs',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:technicien,assistante,admin,demandeur',
        ]);
        $data['password'] = Hash::make($data['password']);
        Utilisateur::create($data);
        return redirect()->route('Utilisateurs.index');
    }

    public function show($id)
    {
        $utilisateurs = Utilisateur::findOrFail($id);
        return view('admin.UtilisateurShow', compact('utilisateurs'));
    }

    public function edit($id)
    {
        $this->authorizeAdmin();
        $utilisateur = Utilisateur::findOrFail($id);
        $this->authorizeNonAdmin($utilisateur);
        return view('admin.UtilisateurEdit', compact('utilisateur'));
    }

    public function update(Request $request, $id)
    {
        $this->authorizeAdmin();
        $utilisateur = Utilisateur::findOrFail($id);
        $this->authorizeNonAdmin($utilisateur);

        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:utilisateurs,username,' . $utilisateur->id,
            'role' => 'required|string|in:technicien,assistante,admin,demandeur',
        ]);

        $utilisateur->update($data);
        return redirect()->route('Utilisateurs.index');
    }

    public function destroy($id)
    {
        $this->authorizeAdmin();

        $utilisateur = Utilisateur::findOrFail($id);
        $this->authorizeNonAdmin($utilisateur);

        $utilisateur->delete();
        return redirect()->route('Utilisateurs.index');
    }

    private function authorizeAdmin()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'This action is unauthorized.');
        }
    }

    private function authorizeNonAdmin(Utilisateur $utilisateur)
    {
        if ($utilisateur->role === 'admin') {
            abort(403, 'This action is unauthorized.');
        }
    }
}
