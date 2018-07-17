
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


    <form method="POST" action="/comment/{{$movie->id}}/add">

        {{csrf_field()}}

            <div class="form-group">
              <label for="text">Comment</label>
              <textarea type="text" class="form-control" id='content' name='content'></textarea>
              @include('partials.errors', ['fieldName' =>  'content'])
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    
@endsection