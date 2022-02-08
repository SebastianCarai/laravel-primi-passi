<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('homepage')}}">Torna alla homepage</a>

    <h3>Lista amici di {{ $name }} {{ $lastname }}</h3>
    @forelse($friends as $friend)
        <ul>
            <li>{{ $friend}}</li>
        </ul>
    @empty
        <div>Non ci sono amici</div>
    @endforelse
</body>
</html>