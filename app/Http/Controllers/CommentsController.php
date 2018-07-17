<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class CommentsController extends Controller
{
    public function store(Movie $movie)
    {
        $this->validate(request(),[
            'content' => 'required',
          
         
        ]);
       
        $movie->comments()->create([

            'content' => request('content'),
          
        ]);
        
        return redirect('movies/'.$movie->id);
    }
}
