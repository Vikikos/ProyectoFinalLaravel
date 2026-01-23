@extends('layout.layout')

@section('title', 'Evento')

@section('main')
    <h1>{{ $event->name }} - {{ $event->type }}</h1>
    <div>{{ $event->location }}</div>
    <div>{{ $event->date }} {{ $event->hour }}</div>
@endsection