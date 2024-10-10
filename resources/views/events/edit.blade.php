<!DOCTYPE html>
<html>
<head>
    <title>Evenement Bewerken</title>
</head>
<body>
    <h1>Evenement Bewerken</h1>

    <!-- Toon de ID van het evenement -->
    <p>Evenement ID: {{ $event->id }}</p>

    <form action="{{ route('events.update', ['event' => $event->id]) }}" method="POST">
    @csrf
    @method('PUT')
        
        <label for="name">Naam:</label>
        <input type="text" name="name" value="{{ $event->name }}" required>
        
        <label for="date">Datum:</label>
        <input type="date" name="date" value="{{ $event->date }}" required>
        
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $event->type }}" required>
        
        <button type="submit">Bijwerken</button>
    </form>
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