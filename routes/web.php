<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

// Recette Routes
Route::get('/recettes', [RecetteController::class, 'index']);
Route::post('/recettes/create', [RecetteController::class, 'store']);
Route::get('/recette/{id}', [RecetteController::class, 'show']);
Route::post('/recette/update/{id}', [RecetteController::class, 'update']);
Route::post('/recette/delete/{id}', [RecetteController::class, 'destroy']);

// Post Routes
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts/create', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/post/update/{id}', [PostController::class, 'update']);
Route::post('/post/delete/{id}', [PostController::class, 'destroy']);

// Comments Controllers
Route::get('/comments', [CommentController::class, 'index']);
Route::post('/comments/create', [CommentController::class, 'store']);
Route::get('/comment/{id}', [CommentController::class, 'show']);
Route::post('/comment/update/{id}', [CommentController::class, 'update']);
Route::post('/comment/delete/{id}', [CommentController::class, 'destroy']);

// Categorie Controllers
Route::get('/categories', [CategorieController::class, 'index']);
Route::post('/categories/create', [CategorieController::class, 'store']);
Route::get('/categorie/{id}', [CategorieController::class, 'show']);
Route::post('/categorie/update/{id}', [CategorieController::class, 'update']);
Route::post('/categorie/delete/{id}', [CategorieController::class, 'destroy']);

