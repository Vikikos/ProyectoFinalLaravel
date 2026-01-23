@extends('layout.layout')

@section('title', 'Editar Evento')

@section('main')
    <h1>Editar evento {{ $event->name }}</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div>
           <label for="name">Nombre del evento: </label>
            <input type="text" name="name" id="name" value="{{ $event->name }}">
        </div>
        @error('name'){{$message}} @enderror

        <label for="description">Descripcion del evento: </label><br>
        <textarea name="description" id="description" cols="30" rows="10">
            {{ $event->description }}
        </textarea><br>
        @error('description'){{$message}} @enderror

        <div>
            <label for="location">Lugar del evento: </label>
            <input type="text" name="location" id="location" value="{{ $event->location }}">
        </div>
        @error('location'){{$message}} @enderror

        <div>
            <label for="map">Url del mapa: </label>
            <input type="text" name="map" id="map" value="{{ $event->map }}">
        </div>
        @error('map'){{$message}} @enderror

        <div>
            <label for="date">Fecha del evento: </label>
            <input type="text" name="date" id="date" value="{{ $event->date }}">
        </div>
        @error('date'){{$message}} @enderror

        <div>
           <label for="hour">Hora del evento: </label>
            <input type="text" name="hour" id="hour" {{ $event->hour }}>
        </div>
        @error('hour'){{$message}} @enderror

        <label for="type">Tipo:</label>
        <select name="type" id="type">
            <option value="official" @selected($event->type)>Oficial</option>
            <option value="exibition" @selected($event->type)>Exibicion</option>
            <option value="charity" @selected($event->type)>Caridad</option>
        </select>
        @error('type'){{$message}} @enderror

        <div>
           <label for="tags">Etiquetas</label><br>
            <textarea name="tags" id="tags" cols="30" rows="10">
                {{ $event->tags }}
            </textarea>
        </div>
        @error('tags'){{$message}} @enderror

        <div>
            <input type="checkbox" name="visible" id="visible" @checked($event->visible)>
            <label for="visible">Hacer visible el evento</label>
        </div>
        @error('visible'){{$message}} @enderror

        <div>
            <input type="reset" value="Borrar Todo">
            <input type="submit" value="Añadir">
        </div>
        
    </form>
@endsection