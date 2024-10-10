<!DOCTYPE html>
<html>
<head>
    <title>Evenementen</title>
</head>
<body>
    <h1>Evenementen</h1>
    <a href="{{ route('events.create') }}">Voeg een nieuw evenement toe</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
    @foreach($events as $event)
        <li>
            {{ $event->name }} - {{ $event->date }} - {{ $event->type }}
            <a href="{{ route('events.edit', $event->id) }}">Bewerken</a>
            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Verwijder</button>
            </form>
        </li>
    @endforeach
</ul>
</body>
</html>