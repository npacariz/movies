
@extends('layouts.master')
@section('page-name')

    <h1>All Movies</h1>

@endsection
@section('content')
@foreach($movies as $movie)
    <div class="jumbotron">
        <h4> <a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h4>

        <p>{{$movie->storyline}}</p>
    </div>
@endforeach

@endsection