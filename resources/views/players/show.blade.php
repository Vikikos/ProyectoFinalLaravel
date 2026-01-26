@extends('layout.layout')

@section('title', 'Inicio')

@section('main')
    <h1>{{ $player->name }}</h1>
    <img src="/storage/players{{ $player->photo }}" alt="Foto de {{ $player->name }}">
    @isadmin
        visible
    @endisadmin
@endsection