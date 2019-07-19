@extends('layout')

@section('title','Home')

@section('content')
    
    <h1>Este es el home</h1>
    Bienvenid@ {{ $nombre ?? "Invitado" }} 

@endsection
