@extends('layout.app')


@section('post')
    <div class="container mx-auto px-4 py-6 bg-white rounded-lg shadow-md p-6">
        @if($post)
            <div>
                <span>Author: {{ $post->prenom }}  {{ $post->nom }}</span>
            </div>
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold mb-4">{{ $post->title}}</h1>
                <p class="text-gray-600 mb-4">{{$post->created_at}}</p>
            </div>
            <div class="prose max-w-none">
                <p>
                    {{ $post->content }}
                </p>
            </div>
        @else
            <p class="text-xl text-center">Post not found</p>
        @endif
    </div>
@endsection

@section('comments')
    <div id="comments-container" class="bg-white rounded-lg shadow-md p-6 text-black container mx-auto px-4 py-6 ">
        <h2 class="text-2xl font-semibold mb-4">Comments</h2>
        <div id="comments-list">
            @if($postComments->isEmpty())
                <p>No Comment </p>
            @else
                @foreach($postComments as $comment)
                    <div class="bg-gray-100 p-4 rounded-md mb-4">
                        <div>
                            <div>
                                <strong class="text-deep-blue">{{ $comment->name }}</strong>
                            </div>
                            <div class="flex  justify-between">
                                <span class="text-sm text-gray-500">{{ $comment->created_at }}</span>
                                <form action="{{ route('comment.delete', ['id' => $comment->id]) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div>
                            <p>{{$comment->content}}</p>
                        </div>
                    </div>

                    </div>
                @endforeach
            @endif

        </div>
        <form action="{{ route('comment.create') }}" method="POST" id="comment-form" class="mt-8">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nom</label>
                <input type="text" id="name" name="nom" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-deep-blue">
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Prenom</label>
                <input type="text" id="name" name="prenom" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-deep-blue">
            </div>
            <div class="mb-4">
                <label for="comment" class="block text-gray-700 font-semibold mb-2">Comment</label>
                <textarea id="comment" name="content" required rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-deep-blue"></textarea>
            </div>
            <input type="hidden" name="post_it" value="{{ $post->id }}">
            <button type="submit" class="bg-deep-blue text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">Submit Comment</button>
        </form>
    </div>
@endsection
