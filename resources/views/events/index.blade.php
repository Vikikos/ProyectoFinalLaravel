@extends('layout.layout')

@section('title', 'Eventos')

@section('main')
    <h1>Eventos</h1>
    @if (count($events)> 0)
        @foreach ($events as $event)
            <h2>{{ $event->name }} </h2>
            <div>{{ $event->location }} - {{ $event->hour }}</div>
            <div>
                <a href="{{ route('events.show', $event) }}">Ver mas</a>
                <div>Me gusta</div>
                <a href="{{ route('events.edit', $event) }}">Editar</a>
            </div>
        @endforeach
    @else
        <div>No hay eventos Proximos</div>
    @endif
    
@endsection