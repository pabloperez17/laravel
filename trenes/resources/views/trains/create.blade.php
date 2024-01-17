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
        <label>Name</label>
        <input type="text" name="name">
        <label>Passengers</label>
        <input type="number" name="passengers">
        <label>Year</label>
        <input type="number" name="year">
        <label>Train_type_id</label>
        <select name="train_type_id">
            @foreach ($ as $train_type_id)
                <option value="{{ $train_type_id->id }}">{{ $train_type_id->nombre_artista }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>

</body>
</html>