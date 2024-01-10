@extends('layout')

@section('title', 'Ficha de la Película')

@section('content')
    <h1>Ficha de la Película {{$movies->id}}</h1>

    <!-- EDITAR PELICULA ACT5 -->
    <a href="{{ route('movies.edit', 'movies.id') }}">Editar Película</a>

    <!-- ACT 9 MOSTRAR INFO DE LA PELÍCULA, ENLACE PARA EDITAR Y FORMULARIO -->

            <li>
                    Título: {{ $movie->title }}
                    <br>
                    Año: {{ $movie->year }}
                    <br>
                    Argumento: {{ $movie->plot }}
                    <br>
                    Puntuación: {{ $movie->rating }}
            </li>
        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Eliminar">
        </form>
@endsection
