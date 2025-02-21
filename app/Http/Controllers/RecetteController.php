<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $id = $req->get('categorie_id');
        if($id) {
            $recettes = Recette::where('categorie_id', $id)->get();
        } else {
            $recettes = Recette::all();
        }
        $categories = Categorie::all();
        return view('recettes.index', compact('recettes', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'ingredient' => 'required|string|max:255',
            'instruction' => 'required|string|max:2000',
            'categorie_id' => 'required'
        ]);

        Recette::create($request->all());
        return redirect()->route('recettes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recette = Recette::findOrfail($id);
        return view('recettes.show', compact('recette'));
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

        return redirect()->route('recettes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recette = Recette::findOrfail($id);
        $recette->delete($id);
        return redirect()->route('recettes.index');
    }
}
