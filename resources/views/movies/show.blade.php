@extends('layout')

@section('title', 'Ficha de la Película')

@section('content')
    <h1>Ficha de la Película {{$movie->id}}</h1>



    <!-- ACT 9 MOSTRAR INFO DE LA PELÍCULA, ENLACE PARA EDITAR Y FORMULARIO -->
                    Título: {{ $movie->title }}
                    <br>
                    Año: {{ $movie->year }}
                    <br>
                    Argumento: {{ $movie->plot }}
                    <br>
                    Puntuación: {{ $movie->rating }}
            <br><br>
             <!-- EDITAR PELICULA ACT5 -->
    <a href="{{ route('movies.edit', $movie->id) }}">Editar Película</a>
    <br><br>
        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Eliminar">
        </form>
        <br>
@endsection
