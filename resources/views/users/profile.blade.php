@extends('layout')

@section('title', 'Perfil de usuario')

@section('content')

    <h1>Perfil de usuario</h1>
    <p>Nombre: {{ $user->name }}</p>
    <p>Nombre de usuario: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Nacimiento: {{ $user->birthdate }}</p>
    <p>Tipo de cuenta: {{ $user->rol }}</p>

@endsection
