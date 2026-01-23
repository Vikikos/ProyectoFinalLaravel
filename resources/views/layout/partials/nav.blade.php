<nav>
    <a href="{{route('index')}}">Inicio</a>
    <a href="">Jugadores</a>
    <a href="{{route('events.index')}}">Eventos</a>
    <a href="">Tienda</a>
    <a href="">Contacto</a>
    <a href="">Donde Estamos</a>
    @auth
        <a href="">Cuenta / </a>
        <a href="{{route('logout')}}">Cerrar Sesion</a>
    @else
        <a href="{{route('loginForm')}}">Iniciar Sesion / </a>
        <a href="{{route('signupForm')}}">Registrarse</a>
    @endauth
</nav>