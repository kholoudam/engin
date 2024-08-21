<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engin;
use App\Models\Detail;
use App\Models\Critere;

class ReparationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer uniquement les engins ayant des critères associés
        $engins = Engin::whereHas('details')->with(['details.critere'])->paginate(2);

        return view('technicien.panne', compact('engins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $criteres = Critere::all();
        $engin = Engin::findOrFail($id);

        return view('technicien.PanneCreate', compact('criteres','engin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }
    public function store(Request $request, $id)
    {
        // Récupérer l'engin
        $engin = Engin::findOrFail($id);

        // Vérifier les critères sélectionnés et les marquer comme réparés
        foreach ($request->input('criteria', []) as $critere_id => $status) {
            // Rechercher le détail correspondant à cet engin et critère
            $detail = Detail::where('Engin_id', $engin->id)
                            ->where('Critere_id', $critere_id)
                            ->first();

            if ($detail && $status == 'repaired') {
                // Suppression du critère lié à l'engin car il est réparé
                $detail->delete();
            }
        }

        return redirect()->route('technicien.panne')->with('success', 'Critères réparés avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérer uniquement les engins ayant des critères associés
        $engins = Engin::whereHas('details')->with(['details.critere'])->findOrFail($id);

        return view('technicien.PanneShow', compact('engins'));
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
