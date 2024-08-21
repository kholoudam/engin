<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engin;

class EnginsAssistanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $engins = Engin::paginate(2);
        return view('assistant.EnginsIndex', compact('engins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assistant.EnginsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
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
    
        return redirect()->route('engin.index')->with('success', 'Engin créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $engin = Engin::findOrFail($id);
        return view('assistant.EnginShow', compact('engin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $engin = Engin::findOrFail($id);
        return view('assistant.EnginsEdit', compact('engin'));
    }

    /**
     * Update the specified resource in storage.
     */
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
    
        return redirect()->route('engin.index')->with('success', 'Engin mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $engin = Engin::findOrFail($id);
        $engin->delete();

        return redirect()->route('engin.index')->with('success', 'Engin supprimé avec succès.');
    }
}
