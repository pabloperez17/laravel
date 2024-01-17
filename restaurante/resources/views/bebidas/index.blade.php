<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bedidas</title>
</head>
<body>
    <h1>Este es el index de las bebidas</h1>
    <h2>{{ $mensaje }}</h2>
    <table>
        <thead>
            <tr>
                <th>Bebida</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebidas as $bebida)
                <tr>
                    <td> {{ $bebida->bebida }} </td>
                    <td> {{ $bebida->precio }} </td>
                    <td> {{ $bebida->cantidad }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>