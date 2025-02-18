<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recettes = Recette::all();
        return view('recette.index', compact('recettes'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'ingredient' => 'required|string|max:255',
            'instruction' => 'required|string|max:2000',
            'categorie_id' => 'required|number'
        ]);

        Recette::create($request->all());
        return redirect()->route('recette.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recette = Recette::findOrfail($id);
        return view('recette.show', compact('recette'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ingredient' => 'required|string|max:255',
            'instruction' => 'required|string|max:2000'
        ]);

        $recette = Recette::findOrfail($id);
        $recette->update($request->only(['ingredient', 'instruction']));

        return redirect()->route('recette.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recette = Recette::findOrfail($id);
        $recette->delete($id);
        return redirect()->route('recette.index');
    }
}
