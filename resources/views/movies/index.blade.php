@extends('layout')


@section('title', 'Listado de Películas')


@section('content')
    <h1>Listado de Películas</h1>

    <ul>
    @auth
        @foreach($movies as $movie)
            <li>
                <!-- la primera parte lista pelicula, la segunda ACT11 implementa el director de la película con su nombre -->
                <a href="{{ route('movies.show', $movie->slug) }}">{{ $movie->title }}</a> - <a href="{{ route('directors.show', $movie->director) }}"> {{$movie->director->name}}</a>
            </li>
    @if($movie->visibility === 1)
        Disponible
    @else
        No disponible
    @endif
        @endforeach
    @else
    @foreach ($movies->where('visibility, 1') as $movie)
    <li>
        <a href="{{ route('movies.show', $movie->slug) }}">{{ $movie->title }}</a> - <a href="{{ route('directors.show', $movie->director) }}"> {{$movie->director->name}}</a>
    </li>
    @endforeach
    @endauth
    </ul>


    {{ $movies->links() }}
@endsection
