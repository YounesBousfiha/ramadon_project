@extends('layout.app')

@section('recette')
    <main class="container mx-auto px-4 py-8">
        <div>
            <form action="{{ route('recette.delete', ['id' => $recette->id]) }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
        <div id="recipe-container" class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $recette->title }}</h1>
            <img src="https://foodish-api.com/images/dosa/dosa60.jpg" alt="Dosa Image" class="w-full h-64 object-cover rounded-lg mb-6">
            <p class="text-gray-600 mb-4">{{$recette->description }}</p>
            <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="text-center">
                    <span class="block font-semibold">Prep Time</span>
                    30 min
                </div>
                <div class="text-center">
                    <span class="block font-semibold">Cook Time</span>
                    45 min
                </div>
                <div class="text-center">
                    <span class="block font-semibold">Servings</span>
                    6
                </div>
            </div>
            <h2 class="text-2xl font-semibold mb-2">Ingredients</h2>
            <ul class="list-disc list-inside mb-6">
                {{ $recette->ingredient }}
            </ul>
            <h2 class="text-2xl font-semibold mb-2">Instructions</h2>
            <ol class="list-decimal list-inside">
                {{ $recette->instruction }}
            </ol>
        </div>
    </main>
@endsection
