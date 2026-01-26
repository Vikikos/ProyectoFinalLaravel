@extends('layout.layout')

@section('title', 'Añadir Jugador')

@section('main')
    <h1>Añadir Jugador</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <div>*campos obligatorios</div>
        <div>
            <label for="name">*Nombre: </label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </div>
        @error('name') {{$message}} @enderror
        <div>
            <label for="twitter">Twitter: </label>
            <input type="text" name="twitter" id="twitter" value="{{old('twitter')}}">
        </div>
        <div>
            <label for="instagram">Instagram: </label>
            <input type="text" name="instagram" id="instagram" value="{{old('instagram')}}">
        </div>
        <div>
            <label for="twitch">Twitch: </label>
            <input type="text" name="twitch" id="twitch" value="{{old('twitch')}}">
        </div>
        <div>
            <label for="photo">*Imagen de jugador: </label><br>
            <input type="file" name="photo" id="photo">
        </div>
        @error('photo') {{$message}} @enderror
        <div>
            <input type="checkbox" name="visible" id="visible">
            <label for="visible">Jugador visible</label>
        </div>
        <div>
            <input type="reset" value="Borrar Todo">
            <input type="submit" value="Guardar">
        </div>
    </form>
@endsection