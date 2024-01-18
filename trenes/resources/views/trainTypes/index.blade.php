<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Type Index</title>
</head>
<body>
    <a href="{{route('trainTypes.create')}}">Crear tren</a>
    <table border="1px">
        <thead>
            <tr>
                <th>Tipo de tren</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainTypes as $trainType)
                <tr>
                    <td>{{ $trainType->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>