<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
      'title', 'genre', 'director', 'year', 'storyline'
    ];

    public function comments() {

        $this->hasMany(Comments::class)
    }
}
