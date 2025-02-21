@extends('layout.app')


        @section('recettes')
            <div id="addRecipeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                    <h2 class="text-2xl font-bold mb-4">Add New Recipe</h2>
                    <form id="addRecipeForm" action="{{ route('recettes.create') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700">Nom</label>
                            <input type="text" id="title" name="nom" class="w-full px-3 py-2 border rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700">Prenom</label>
                            <input type="text" id="title" name="prenom" class="w-full px-3 py-2 border rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700">description</label>
                            <textarea id="description" name="description" class="w-full px-3 py-2 border rounded-md" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700">ingredient</label>
                            <textarea id="description" name="ingredient" class="w-full px-3 py-2 border rounded-md" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="prepTime" class="block text-gray-700">Instruction</label>
                            <textarea type="text" id="prepTime" name="instruction" class="w-full px-3 py-2 border rounded-md" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Categorie</label>
                            <select class="w-full px-3 py-2 border rounded-md" name="categorie_id">
                                <option value="0">All</option>
                                @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->categorie_nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">Cancel</button>
                            <button type="submit" class="bg-deep-blue text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">Add</button>
                        </div>
                    </form>
                </div>
            </div>

            <main class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-8 text-center text-white">Ramadan Recipes</h1>
                <div class="flex justify-beetwen">
                    <button id="openModal" class="bg-deep-blue text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">Add Recipe</button>
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
                            <a href="recette/{{ $recette->id }}" class="mt-4 inline-block text-deep-blue hover:text-gold transition-colors">View Recipe</a>
                        </div>
                    </div>
                @endforeach
            @endif
                </div>
            </main>
        @endsection
@push('modal')
    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('addRecipeModal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('addRecipeModal').classList.add('hidden');
        });

        document.getElementById('addRecipeForm').addEventListener('submit', function() {
            // event.preventDefault();
            // Handle form submission logic here
            document.getElementById('addRecipeModal').classList.add('hidden');
        });
    </script>
    {{--  JavaScript for Add Function  --}}
@endpush

