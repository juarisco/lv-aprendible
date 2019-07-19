@extends('layout')

@section('title','Portafolio')

@section('content')
    
    <h1>Este es el Portafolio</h1>

    <ul>
        @forelse ($portafolio as $item)
            <li>{{ $item['title'] }} <small>{{ $loop->first ? 'Es el primero' : '' }}</small></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse 
    </ul>
    
@endsection
