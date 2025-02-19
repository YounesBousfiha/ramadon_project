<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Comment extends Model
{

    protected $fillable = ['prenom', 'nom', 'content', 'post_it'];

    use HasFactory;

    public function recette() {
        return $this->belongsTo(Recette::class);
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }

}
