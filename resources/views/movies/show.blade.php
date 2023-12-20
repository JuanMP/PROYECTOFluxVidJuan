@extends('layout')

@section('title', 'Ficha de la Película')

@section('content')
<h1>Ficha de la Película {{'movies.id'}}</h1>

<!-- EDITAR PELICULA ACT5 -->
<a href="{{ route('movies.edit', 'movies.id') }}">Editar Película</a>
@endsection
