
@extends('layouts.master')

@section('content')

    <div class="jumbotron">

            <h3>Title: {{$movie->title}}</h3>
            
            <p>Directed by: {{$movie->director}}<p>
            <p>Year: {{$movie->year}}<p>

            <h4>Plot: </h4>
                <p>{{$movie->storyline}}</p>
    </div> 

@endsection