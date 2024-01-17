@extends('layout')

@section('title', 'Ficha de la Película')

@section('content')
    <h1>Ficha de la Película {{$movie->slug}}</h1>



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
    <a href="{{ route('movies.edit', $movie->slug) }}">Editar Película</a>
    <br><br>
        <form action="{{ route('movies.destroy', $movie->slug) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Eliminar">
        </form>
        <br>
@endsection
