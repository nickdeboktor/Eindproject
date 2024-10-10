<!DOCTYPE html>
<html>
<head>
    <title>Atleet Details</title>
</head>
<body>
    <h1>Athlete: {{ $athlete->name }}</h1>
    <p>date of birth: {{ $athlete->date_of_birth }}</p>
    <p>gender: {{ $athlete->gender }}</p>
    <a href="{{ route('athletes.index') }}">Terug naar Atletenlijst</a>
</body>
</html>