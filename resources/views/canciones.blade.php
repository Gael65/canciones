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

    @if(!is_null($song))
        <h2>{{ $song['nombre'] }}</h2>
        <h2>{{ $song['artista'] }}</h2>
    @else
        <ul>
            @foreach ($songs as $s)
                <li>{{ $s['nombre'] }} - {{ $s['artista'] }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>