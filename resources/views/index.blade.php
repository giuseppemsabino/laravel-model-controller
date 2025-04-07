<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h1>{{$movie->title}}</h1>
        </li>
        @endforeach
    </ul>
</body>
</html>