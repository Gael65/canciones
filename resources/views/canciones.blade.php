<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
</head>
<body>
    <h1>Canciones</h1>

    <ul>
        @foreach ($songs as $song)
            <li>{{ $song['cancion'] }} - {{ $song['artista'] }}</li>
        @endforeach
    </ul>

</body>
</html>