<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Characters</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {{--@foreach ($characters as $character)
        <div>Personajes: {{->character}}</div>
    @endforeach--}}



    @foreach ($characters as $character)
    <div class="Characters">
    @if ($loop->index < 3)
        <div>{{$character['name']}} </div>
        <div>{{$character['alias']}}</div>
        <div>{{$character['movie']}}</div>
        <div>{{$character['age']}}</div>
        <div>{{$character['species']}}</div>
        <div>{{$character['gender']}}</div>
        <img src="{{$character['img']}}">

    @endif
    @endforeach

    </div>

</body>
</html>
