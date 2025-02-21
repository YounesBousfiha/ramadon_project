<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Recette;

class HomeController extends Controller
{
    public function index() {
        $totalComments = Comment::count();
        $totalPosts = Post::count();
        $totalRecettes = Recette::count();
        return view('welcome', compact('totalComments', 'totalPosts', 'totalRecettes'));
    }
}
