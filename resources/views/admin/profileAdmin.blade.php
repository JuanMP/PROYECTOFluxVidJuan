@extends('layout')

@section('title', 'Página de Administrador')

@section('content')

<h1>Lista de usuarios de FluxVid</h1>

@foreach ($users as $user)
    <div>
        {{ $user->name }}
        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
        </form>
    </div>
@endforeach
@endsection
