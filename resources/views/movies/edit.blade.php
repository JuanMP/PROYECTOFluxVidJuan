@extends('layout')

@section('title', 'Editar Película')

@section('content')

    <form action=" {{ route('movies.update', $movie) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $movie->title }}">
        @error('title') <br>Error:{{ $message }}@enderror
        <br>

        <label for="year">Año:</label>
        <select name="year" id="year">
            <option value="selecciona">Selecciona un año</option>
            @for ($i = 1950; $i < date('Y') + 2; $i++)
                <option value=" {{ $i }}"{{ $i == $movie->year ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        <br>

        <label for="plot">Argumento</label>
        <textarea type="text" name="plot" id="plot" cols="30" rows="10">{{ $movie->plot }}</textarea>
        @error('plot') <br>Error:{{ $message }}@enderror
        <br>

        <label for="rating">Puntuacion (de 0 a 5 con un decimal):</label>
        <input type="text" name="rating" id="rating" value="{{ $movie->rating }}">
        <br>

        <label for="visibility">Visible:</label>
        <input type="checkbox" name="visibility" id="visibility" {{ $movie->visibility == 1 ? 'checked' : '' }}>
        <br>

        <select name="director" id="director">

            <option value="selecciona">Selecciona un director</option>
            @foreach ($directors as $director)
                <option value="{{ $director->id }}" {{ $director->id == $movie->director_id ? 'selected' : '' }}>
                    {{ $director->name }}</option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="enviar">
    </form>


    <!-- Mostrar todos los errores juntos al final -->
    @if ($errors->any())
        Hay errores en el formulario! <br>
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif
@endsection
