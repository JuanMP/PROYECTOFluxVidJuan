@extends('layout')

@section('content')
    <h1>País: {{ $country }}</h1>

    <ul>
        @foreach($directors as $director)
            <li>{{ $director->name }}</li>
        @endforeach
    </ul>
@endsection
