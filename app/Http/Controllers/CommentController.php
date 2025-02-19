<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = Comment::all();
        return view ('post.show', compact('commentaires'));
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
        $result = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'content' => 'required|max:2000',
            'post_it' => "required|integer"
        ]);
        //dd($request->all());
        Comment::create($request->all());
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|max:2000'
        ]);

        return redirect()->route('posts.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment = Comment::findOrfail($id);
        $comment->delete();
        return back();
    }
}
