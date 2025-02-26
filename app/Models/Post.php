<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['nom', 'prenom', 'title', 'content'];
    use HasFactory;

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
