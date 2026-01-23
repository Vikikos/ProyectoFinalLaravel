@extends('layout.layout')

@section('title', 'Iniciar Sesion')

@section('main')
<h1>Iniciar Sesion</h1>
<form action="" method="post">
    @csrf
    {{-- @if ($error->any())
        {{$error}}
    @endif --}}
    <div>
        <label for="email">Correo Electronico</label>
        <input type="text" name="email" id="email" >
    </div>

    <div>
        <label for="password">Contraseña</label>
        <input type="text" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Recordar Login</label>
    </div>
    <div>
        <input type="submit" value="Iniciar Sesion">
    </div>
</form>
@endsection

