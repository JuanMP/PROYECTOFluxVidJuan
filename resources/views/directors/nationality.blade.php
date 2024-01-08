@extends('layouts.app')

@section('content')
    <h1>Directores de {{ $country }}</h1>

    <ul>
        @foreach($directors as $director)
            <li>{{ $director->name }}</li>
        @endforeach
    </ul>
@endsection
