<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->paginate(3);
        // TODO: add Pagination
        return view('posts.index', compact('posts'));
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
        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'required|max:2000',
        ]);

        Post::create($request->all());
        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrfail($id);
        $postComments = Comment::where('post_it', $id)->get();
        return view('posts.show', compact('post', 'postComments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:2000'
        ]);

        $post = Post::findOrfail($id);
        $post->update($request->only(['title', 'content']));

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrfail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
