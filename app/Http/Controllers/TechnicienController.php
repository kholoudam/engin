<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class TechnicienController extends Controller
{
    public function getSumPannes()
    {
        $sum = Detail::count();
        return response()->json(['sum' => $sum]);
    }

    public function showLatestDetails()
    {
        $latest = Detail::with('critere', 'engin')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
    
        return view('technicien.dashboard', compact('latest'));
    }
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latest = Detail::latest()->take(3)->get(); 
        return view('technicien.dashboard',compact('latest'));
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
