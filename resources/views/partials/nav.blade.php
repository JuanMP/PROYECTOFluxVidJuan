<nav>
    <a href="{{ route('index') }}">Inicio</a>
    <br>
    <a href="{{ route('movies.index') }}">Lista Películas</a>
    <br>
    <a href="{{ route('movies.create') }}">Nueva Película</a>
    <br>
    <a href="{{ route('directors.index') }}">Lista de Directores</a>




    @if (!auth()->check())
    <a href="{{ route('loginForm') }}">Iniciar sesión</a>
    <br>
    <a href="{{ route('signupForm') }}">Registrate</a>
    @else
        <a href="{{ route('users.profile') }}">Mi Perfil</a>
        <form action="{{ route('logout') }}" method="GET">
            @csrf
            <input type="submit" value="Cerrar sesión">
        </form>
    @endif
</nav>
