@extends('layout.app')


@section('posts')
    <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-white">Ramadan Blog Posts</h1>
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
