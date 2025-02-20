@extends('layout.app')


        @section('recettes')
            <main class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-8 text-center">Ramadan Recipes</h1>
                <div>
                    <select>
                        <option value="0">All</option>
                        @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->categorie_nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="recipes-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if($recettes->isEmpty())
                <p>No Recettes Found </p>
            @else
                @foreach($recettes as $recette)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://foodish-api.com/images/pizza/pizza71.jpg" alt="{{ $recette->title }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2">{{ $recette->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ $recette->description }}</p>
                            <div class="flex justify-between items-center text-sm text-gray-500">
                                <span>Prep: 30 min</span>
                                <span>Cook: 35 min</span>
                                <span>Serves: 4 </span>
                            </div>
                            <a href="recipe/{{ $recette->id }}" class="mt-4 inline-block text-deep-blue hover:text-gold transition-colors">View Recipe</a>
                        </div>
                    </div>
                @endforeach
            @endif
                </div>
            </main>
        @endsection

