
@extends('layouts.master')
@section('page-name')

    <h1>Movie</h1>

@endsection

@section('content')

    <div class="jumbotron">

        <h3>Title: {{$movie->title}}</h3>
        <p>Directed by: {{$movie->director}}<p>        
        <p>Genre: <a href="/genres/{{$movie->genre}}"> {{$movie->genre}} </a></p>   
        <p>Year: {{$movie->year}}<p>
       

        <h4>Plot: </h4>

        <p>{{$movie->storyline}}</p>

    </div>

    @if(count($movie->comments )>0)

        <div>
            <h5>Comments:</h5>

            @foreach($movie->comments as $comment)
            
            <div class="panel panel-white post panel-shadow">

                <div class="post-description"> 
                    <p>{{$comment->content}}</p>
                </div>

                <div>
                    <p class="text-muted time">  posted: {{$comment->created_at->diffForHumans()}}</p>
                </div>    

                <hr>    

              </div>

            @endforeach

         </div> 

    @endif    
             

    <form method="POST" action="/comment/{{$movie->id}}/add">

        {{csrf_field()}}

        <div class="form-group">
            <label for="text">Comment</label>
            <textarea type="text" class="form-control" id='content' name='content'></textarea>
                 @include('partials.errors', ['fieldName' =>  'content'])
        </div>

        <button type="submit" class="btn btn-primary">Add comment</button>
    </form>


    
@endsection