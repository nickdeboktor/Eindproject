<!DOCTYPE html>
<html>
<head>
    <title>Nieuw Evenement</title>
</head>
<body>
    <h1>Nieuw Evenement</h1>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="naam">Naam:</label>
        <input type="text" name="name" required>
        <br>
        <label for="datum">Datum:</label>
        <input type="date" name="date" required>
        <br>
        <label for="type">Type:</label>
        <select name="type" required>
            <option value="race">Race</option>
            <option value="springen">Springen</option>
            <option value="werpen">Werpen</option>
        </select>
        <br>
        <button type="submit">Voeg Evenement Toe</button>
    </form>
    <a href="{{ route('events.index') }}">Terug naar Evenementenlijst</a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>