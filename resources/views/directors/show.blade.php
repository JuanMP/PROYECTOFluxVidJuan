@extends('layout')

<!-- @section('title', 'Ficha del Director') -->

@section('content')
<h1>Ficha del Director {{ $director->name }}</h1>

<h2>Nacimiento: {{ $director->birthday }}</h2>
<h2>Nacionalidad: {{ $director->nationality }}</h2>

@foreach ($director->movies as $movie)
    <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a> - {{ $movie->year }}</li>
    @endforeach

@endsection



