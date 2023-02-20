<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    
    <h1>Productos</h1>
    
    @foreach($productos as $prod)

        <ul>
            @foreach(json_decode($prod->images, true)['img'] as $img)
                <li>{{ $img }}</li>
            @endforeach
        </ul>
      
    @endforeach

</body>
</html>