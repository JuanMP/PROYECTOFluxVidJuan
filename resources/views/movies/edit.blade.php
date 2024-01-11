@extends('layout')

@section('title', 'Editar Película')

@section('content')
    <h1>Editar Película</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ $movie->title }}">
        <br>

        <label for="year">Año:</label>
        <input type="text" name="year" value="{{ $movie->year }}">
        <br>

        <label for="plot">Argumento:</label>
        <textarea name="plot">{{ $movie->plot }}</textarea>
        <br>

        <label for="rating">Puntuación:</label>
        <input type="text" name="rating" value="{{ $movie->rating }}">
        <br>

        <input type="submit" value="Guardar cambios">
    </form>
@endsection
