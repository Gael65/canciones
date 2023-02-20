<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>

    <form action="" method="POST">
        @csrf 

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>

        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="descripcion">Descripcion</label><br>
        <input type="text" name="descripcion" id="descripcion"><br>

        @error('descripcion')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="descripcion">Costo</label><br>
        <input type="text" name="costo" id="costo"><br>

        @error('costo')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>