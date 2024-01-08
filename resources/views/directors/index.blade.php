@extends('layout')


@section('title', 'Listado de Directores')


@section('content')
<h1>Listado de Directores</h1>

<ul>
    @foreach($directors as $director)
        <li>
            Nombre: {{ $director->name }}
            <br>
            Nacionalidad: {{ $director->nacionality }}
            <br>
            Nacimiento: {{ $director->birthday }}
        </li>
    @endforeach
</ul>
@endsection
