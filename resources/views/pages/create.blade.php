@extends('layouts.master')

@section('page-name')

    <h1>Add Movie</h1>

@endsection

@section('content')
    <div class="jumbotron">

        <form action="/create" method="POST">
            {{csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name='title'>
                @include('partials.errors', ['fieldName' =>  'title'])

            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name='director'>
                @include('partials.errors', ['fieldName' =>  'director'])

            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name='year'>
                @include('partials.errors', ['fieldName' =>  'year'])

            </div>
            <div class="form-group">
                <label for="gener">Gener</label>
                <input type="text" class="form-control" id="genre" name='genre'>
                @include('partials.errors', ['fieldName' =>  'genre'])

            </div>          
            <div class="form-group">
                <label for="storyline">Storyline</label>
                <textarea class="form-control" id="storyline" name="storyline" rows="3"></textarea>
                @include('partials.errors', ['fieldName' =>  'storyline'])

            </div>

            <button class="btn btn-success" type="submit">Add movie</button>
        </form>
        
    </div>
@endsection
