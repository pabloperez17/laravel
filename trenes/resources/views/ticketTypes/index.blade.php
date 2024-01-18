<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Type Index</title>
</head>
<body>
    <a href="{{route('ticketTypes.create')}}">Crear tipo de ticket</a>
    <table border="1px">
        <thead>
            <tr>
                <th>Tipo de ticket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ticketTypes as $ticketType)
                <tr>
                    <td>{{ $ticketType->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>