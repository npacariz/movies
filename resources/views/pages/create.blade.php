@extends('layouts.master')

@section('page-name')

    <h1>Add Movie</h1>

@endsection

@section('content')
    <div class="jumbotron">
        <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name='title'>
                </div>
                <div class="form-group">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" id="director" name='director'>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Year</label>
                    <input type="text" class="form-control" id="title" name='title'>
                </div>
                <div class="form-group">
                    <label for="gener">Gener</label>
                    <input type="text" class="form-control" id="gener" name='gener'>
                </div>          
                <div class="form-group">
                    <label for="storyline">Storyline</label>
                    <textarea class="form-control" id="storyline" name="storyline" rows="3"></textarea>
                </div>

                <button class="btn btn-success" type="submit">Add movie</button>
        </form>
    </div>
@endsection
