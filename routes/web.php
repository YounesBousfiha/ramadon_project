<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;

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

// Comments Controllers

