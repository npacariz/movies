
@extends('layouts.master')
@section('page-name')

    @if(Request::is('genres/*'))
        <h1>Movies of {{$movies[0]->genre}} genre</h1>
    @else
        <h1>All Movies</h1>
    @endif
    
@endsection

@section('content')

    @foreach($movies as $movie)

        <div class="jumbotron">

            <h4> <a href='/movies/{{$movie->id}}'>{{$movie->title}}</a></h4>

            <p>{{$movie->storyline}}</p>

        </div>
    @endforeach

@endsection