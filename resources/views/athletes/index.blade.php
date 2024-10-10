<!DOCTYPE html>
<html>
<head>
    <title>Atleten</title>
</head>
<body>
    <h1>Atleten</h1>
    <a href="{{ route('athletes.create') }}">Voeg een nieuwe atleet toe</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($athletes as $athlete)
            <li>
                {{ $athlete->name }} - {{ $athlete->date_of_birth }} - {{ $athlete->gender }}
                <a href="{{ route('athletes.edit', $athlete->id) }}">Bewerken</a>
                <form action="{{ route('athletes.destroy', $athlete->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Verwijder</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>