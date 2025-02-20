<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = ['prenom', 'nom', 'description', 'ingredient', 'instruction', 'categorie_id'];
    use HasFactory;

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
