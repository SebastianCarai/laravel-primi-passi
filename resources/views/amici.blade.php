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
    @if (count($friends)>0)
        <ul>
            @foreach ($friends as $friend)
                <li>{{ $friend}}</li>
            @endforeach
        </ul>
    @else
        <b>non ci sono amici</b>
    @endif
</body>
</html>