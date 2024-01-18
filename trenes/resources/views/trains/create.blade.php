<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create train</title>
</head>
<body>
    <form action="{{ route('trains.store') }}" method="post">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name">
        <br><br>
        <label>Pasajeros</label>
        <input type="number" name="passengers">
        <br><br>
        <label>Año</label>
        <input type="number" name="year">
        <br><br>
        <label>Tipo de tren</label>
        <select name="train_type_id">
            @foreach ($train_types as $train_type)
                <option value="{{ $train_type->id }}">{{ $train_type->type }}
                </option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>

</body>
</html>