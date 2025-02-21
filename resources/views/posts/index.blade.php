@extends('layout.app')


@section('posts')

    <div id="addRecipeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4">Add New Recipe</h2>
            <form id="addRecipeForm" action="{{ route('posts.create') }}" method="POST">
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
                    <label for="description" class="block text-gray-700">Title</label>
                    <textarea id="description" name="title" class="w-full px-3 py-2 border rounded-md" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Content</label>
                    <textarea id="description" name="content" class="w-full px-3 py-2 border rounded-md" required></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">Cancel</button>
                    <button type="submit" class="bg-deep-blue text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">Add</button>
                </div>
            </form>
        </div>
    </div>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-white">Ramadan Blog Posts</h1>
        <button id="openModal" class="bg-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors inline-block">Add Recipe</button>
        <div id="posts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">{{ $post->title}}</h2>
                        <p class="text-gray-600 mb-4">{{ $post->content  }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{$post->created_at}}</span>
                            <a href="post/{{ $post->id }}" class="text-deep-blue hover:text-gold transition-colors">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-12">
            {{ $posts->links() }}
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
@endpush
