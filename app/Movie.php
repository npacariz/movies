<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Commnet;
class Movie extends Model
{
    protected $fillable = [
      'title', 'genre', 'director', 'year', 'storyline'
    ];

    public function comments() {

       return $this->hasMany(Comment::class);
    }
}
