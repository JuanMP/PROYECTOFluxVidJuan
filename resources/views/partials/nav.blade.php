<nav>
    <a href="{{ route('index') }}">Inicio</a>
    <br>
    <a href="{{ route('movies.index') }}">Lista Películas</a>
    <br>
    <a href="{{ route('movies.create') }}">Nueva Película</a>
    <br>
    <a href="{{ route('directors.index') }}">Lista de Directores</a>

    <br>
    <br>



    @if (auth()->check() && auth()->user()->rol === 'admin')
    <a href="{{ route('admin.profileAdmin') }}">Lista de usuarios</a>
    @endif
    @if (!auth()->check())
    <a href="{{ route('loginForm') }}">Iniciar sesión</a>
    <br>
    <a href="{{ route('signupForm') }}">Registrarse</a>
    @else
        <a href="{{ route('users.profile') }}">Mi Perfil</a>
        <form action="{{ route('logout') }}" method="GET">
            @csrf
            <input type="submit" value="Cerrar sesión">
        </form>
    @endif
</nav>
