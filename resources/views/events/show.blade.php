<!-- resources/views/evenementen/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Evenement Details</title>
</head>
<body>
    <h1>Evenement: {{ $event->naam }}</h1>
    <p>Datum: {{ $event->datum }}</p>
    <p>Type: {{ $event->type }}</p>
    <a href="{{ route('events.index') }}">Terug naar Evenementenlijst</a>
</body>
</html>