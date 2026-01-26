@extends('layout.layout')

@section('title', 'Inicio')

@section('main')
    <h1>Jugadores</h1>
    @foreach ($players as $player)
        <h2>{{ $player->name }}</h2> 
        @auth
           <a href="{{ route('players.show',$player) }}">Ver jugador</a>
        @else 
            <div>
                <a href="{{ route('loginForm') }}">Inicia sesion</a> para ver mas información
            </div>
        @endauth
        <img src="/storage/players{{ $player->photo }}" alt="Foto de {{ $player->name }}">
    @endforeach
@endsection