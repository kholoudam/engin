<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Engin;
use App\Models\Detail;

class AssistantController extends Controller
{
    public function getSumEngin()
    {
        $sum = Engin::count();
        return response()->json(['sum' => $sum]);
    }

    public function getSumPannes()
    {
        $sum = Detail::count();
        return response()->json(['sum' => $sum]);
    }

    public function getSumAffectation()
    {
        $sum = Affectation::count();
        return response()->json(['sum' => $sum]);
    }

    public function getLatestAffectations()
    {
        $latestA = Affectation::whereHas('engins')->orderBy('created_at', 'desc')->take(5)->select('DateAffectation','etat','Engin_id') ->get();
    
        return response()->json(['latest' => $latestA]);
    }

    public function getLatestPannes()
    {
        $latestP = Detail::whereHas('critere','engin')->orderBy('created_at', 'desc')->take(5)->select('Description','Critere_id','Engin_id') ->get();
    
        return response()->json(['latest' => $latestP]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestA = Affectation::latest()->take(3)->get(); 
        $latestP = Detail::latest()->take(3)->get(); 
        return view('assistant.dashboard',compact('latestA','latestP'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
