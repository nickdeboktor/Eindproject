<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe Atleet</title>
</head>
<body>
    <h1>Nieuwe Atleet</h1>

    <form action="{{ route('athletes.store') }}" method="POST">
        @csrf
        <label for="name">Naam:</label>
        <input type="text" name="name" required>
        <br>
        <label for="date_of_birth">date of birth:</label>
        <input type="date" name="date_of_birth" required>
        <br>
        <label for="gender">Geslacht:</label>
        <select name="gender" required>
            <option value="man">Man</option>
            <option value="vrouw">Vrouw</option>
            <option value="anders">Anders</option>
        </select>
        <br>
        <button type="submit">Voeg Atleet Toe</button>
    </form>
    <a href="{{ route('athletes.index') }}">Terug naar Atletenlijst</a>
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