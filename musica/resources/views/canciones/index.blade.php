<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<a href="{{route('canciones.create')}}">Crear cancion</a>
<table>
    <thead>
        <tr>
            <th>Nombre cancion</th>
            <th>Genero cancion</th>
            <th>Duracion</th>
            <th>Artista de la cancion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($canciones as $cancion)
            <tr>
                <td>{{ $cancion->titulo_cancion }}</td>
                <td>{{ $cancion->genero_cancion }}</td>
                <td>{{ $cancion->duracion }}</td>
                <td>{{ $cancion->artista_cancion->nombre_artista }}</td>
                <td>
                    <form action="{{ route('canciones.show', ['cancion' => $cancion->id]) }}">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="{{ route('canciones.edit', ['cancion' => $cancion->id]) }}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{ route('canciones.destroy', ['cancion' => $cancion->id]) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>