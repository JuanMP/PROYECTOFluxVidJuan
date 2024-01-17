@extends('layout')

@section('title', 'Película Guardada')

@section('content')
    <h1>Película Guardada</h1>
    <p>Título de la Película: {{ $movie->title }}</p>
@endsection
