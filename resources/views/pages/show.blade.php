
@extends('layouts.master')
@section('page-name')

    <h1>Movie</h1>

@endsection

@section('content')

    <div class="jumbotron">

            <h3>Title: {{$movie->title}}</h3>
            
            <p>Directed by: {{$movie->director}}<p>
            <p>Year: {{$movie->year}}<p>

            <h4>Plot: </h4>
                <p>{{$movie->storyline}}</p>

    @if(count($movie->comments )>0)
        <div>
            <h5>Comments:</h5>
            @foreach($movie->comments as $comment)
                <p>{{$comment->content}}</p>
                <p>posted: {{$comment->created_at}}
            @endforeach
        </div>
    @endif    
        
    </div> 


    
@endsection