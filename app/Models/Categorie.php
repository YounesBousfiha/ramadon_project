<?php

namespace App\Models;

use App\Http\Controllers\RecetteController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_nom'
    ];


    public function recette() {
        return $this->hasMany(Recette::class);
    }
}
