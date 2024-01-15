@extends('layout')


@section('title', 'Listado de Películas')


@section('content')
    <h1>Listado de Películas</h1>

    <ul>
        @foreach($movies as $movie)
            <li>
                <!-- la primera parte lista pelicula, la segunda ACT11 implementa el director de la película con su nombre -->
                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a> - <a href="{{ route('directors.show', $movie->director) }}"> {{$movie->director->name}}</a>
            </li>
        @endforeach
    </ul>

    {{ $movies->links() }}
@endsection
