<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create ticket type</title>
</head>
<body>
    <form action="{{ route('ticketTypes.store') }}" method="post">
        @csrf
        <label>Tipo de ticket</label>
        <input type="text" name="type">
        <br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>