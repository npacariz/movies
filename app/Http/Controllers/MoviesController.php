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

    public function create()
    {
        return view('pages.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'genre' => 'required',
            'year' => 'required|after_or_equal:1900|before_or_equal:2018',
            'storyline' => 'required|max:1000'
         
        ]);

        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => request('year'),
            'storyline' => request('storyline'),
            
        ]);

        return redirect('/movies');
    }

}
