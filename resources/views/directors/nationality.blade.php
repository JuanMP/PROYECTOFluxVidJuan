@extends('layout')

@section('content')
    <h1>País: {{ $country }}</h1>

    <ul>
        @foreach ($directors as $director)
            <li>{{ $director->name }}</li>

            @if ($director->movies->count() > 0)
                <ul>
                    @foreach ($director->movies as $movie)
                        <li>{{ $movie->title }}</li>
                    @endforeach
                </ul>
            @else
                <p>No hay películas</p>
            @endif
        @endforeach
    </ul>
@endsection
