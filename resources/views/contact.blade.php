@extends('layout')

@section('title','Contact')

@section('content')
    
    <h1>Contact</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre..." value="Josef"><br>
        <input type="email" name="email" placeholder="Email..." value="josef@mail.com"><br>
        <input type="text" name="subject" placeholder="Asunto..." value="Asund de Josef"><br>
        <textarea name="content" placeholder="Mensaje...">Mensaje de prueba</textarea><br>
        <button type="submit">Enviar</button>
    </form>
    
@endsection
