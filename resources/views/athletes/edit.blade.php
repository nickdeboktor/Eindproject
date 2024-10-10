<!DOCTYPE html>
<html>
<head>
    <title>Bewerken Atleet</title>
</head>
<body>
    <h1>Bewerken Atleet: {{ $athlete->name }}</h1>

    <form action="{{ route('athletes.update', $athlete->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Naam:</label>
        <input type="text" name="name" value="{{ $athlete->name }}" required>
        <br>
        <label for="date_of_birth">date of birth:</label>
        <input type="date" name="date_of_birth" value="{{ $athlete->date_of_birth }}" required>
        <br>
        <label for="gender">gender:</label>
        <select name="gender" required>
            <option value="man" {{ $athlete->gender == 'man' ? 'selected' : '' }}>Man</option>
            <option value="vrouw" {{ $athlete->gender == 'vrouw' ? 'selected' : '' }}>Vrouw</option>
            <option value="anders" {{ $athlete->gender == 'anders' ? 'selected' : '' }}>Anders</option>
        </select>
        <br>
        <button type="submit">Bijwerken</button>
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