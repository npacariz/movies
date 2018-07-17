<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($movies as $movie)

        Title: <a href="/movies/{{$movie->id}}">{{$movie->title}}</a> <br>

        Teaser: {{$movie->storyline}}<br>
        
    @endforeach
</body>
</html>