<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Bebida</title>
</head>
<body>
    <form method="post" action="{{route('bebidas.update', ['bebida'=>$bebida->id])}}">
        @csrf 
        {{ method_field('PUT') }}
        <label>Bebida: </label>
        <input type="text" name="bebida" value="{{ $bebida->bebida }}"><br><br>
        <label>Precio: </label>
        <input type="number" step="0.1" name="precio" value="{{ $bebida->precio }}"><br><br>
        <label>Cantidad: </label>
        <input type="text" name="cantidad" value="{{ $bebida->cantidad }}"><br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>