<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Carta</title>
</head>
<body>
    <h1>Esta es la carta</h1>
    <h2>Estas son las bebidas</h2>
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
                    <td> {{ $bebida[0] }} </td>
                    <td> {{ $bebida[1] }} </td>
                    <td> {{ $bebida[2] }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Estos son los platos</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($platos as $plato)
                <tr>
                    <td> {{ $plato[0] }} </td>
                    <td> {{ $plato[1] }} </td>
                    <td> {{ $plato[2] }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>