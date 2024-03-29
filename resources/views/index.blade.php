@extends('layout')

@section('title', 'Página Principal')

@section('content')

<form action="/directors/nationality/" method="POST">
    @csrf
    <select name="country">
        @foreach ($countries as $country)
            <option value="{{ $country->nationality }}" name="{{ $country->nationality }}">{{ $country->nationality }}
            </option>
        @endforeach
    </select>
    <input type="submit" value="Enviar">
</form>

<h1>Bienvenido a FluxVid</h1>
        <p>¡Bienvenido a FluxVid, la revolucionaria aplicación de streaming de películas, donde la excelencia se encuentra con la innovación!</p>

        <p>Estamos encantados de que te unas a nosotros en esta emocionante travesía cinematográfica.</p>

        <p>Prepárate para sumergirte en un vasto y diverso catálogo que supera todas las expectativas, ofreciéndote una selección incomparable de películas que van desde clásicos atemporales hasta los últimos éxitos de taquilla. Nuestra plataforma se distingue por su velocidad incomparable, garantizando que puedas disfrutar de tus películas favoritas sin interrupciones ni demoras. Además, la calidad excepcional de transmisión te sumergirá en una experiencia visual y auditiva extraordinaria.</p>

        <p>Estamos comprometidos con llevarte más allá de los límites de la transmisión convencional, ofreciéndote una nueva dimensión de entretenimiento.</p>

        <p>¡Bienvenido al futuro del streaming de películas!</p>
@endsection
