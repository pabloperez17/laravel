<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Index</title>
</head>
<body>
    <a href="{{route('trains.create')}}">Crear tren</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Passengers</th>
                <th>Year</th>
                <th>Train_type_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->name }}</td>
                    <td>{{ $train->passengers }}</td>
                    <td>{{ $train->year }}</td>
                    <td>{{ $train->train_types_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>