<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
class MoviesController extends Controller
{
    
    public function index() 
    {
        $movies = Movie::all();

        return view('pages.movies', compact('movies'));
    }


    public function show(Movie $movie)
    {
        return view('pages.show', compact('movie'));
    }

}
