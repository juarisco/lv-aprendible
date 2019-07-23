@extends('layout')

@section('title','Crear proyecto')

@section('content')
    
    <h1>@lang('Create New Project')</h1>

    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        
        <label for="">
            Título del proyecto <br>
            <input type="text" name="title">
        </label>
        <br>

        <label for="">
            URL del proyecto <br>
            <input type="text" name="url">
        </label>
        <br>

        <label for="">
            Descripción del proyecto <br>
            <textarea name="description"></textarea>
        </label>
        <br>

        <button type="submit">@lang('Save')</button>
    </form>   
@endsection
