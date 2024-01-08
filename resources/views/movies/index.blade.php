@extends('layout')


@section('title', 'Listado de Películas')


@section('content')
    <h1>Listado de Películas</h1>

    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
