@extends('layout')

@section('title','Editar proyecto')

@section('content')
    
    <h1>@lang('Edit Project')</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('projects.update', $project) }}" method="post">
        @csrf @method('PATCH')
        
        <label for="">
            Título del proyecto <br>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </label>
        <br>

        <label for="">
            URL del proyecto <br>
            <input type="text" name="url" value="{{ old('url', $project->url) }}">
        </label>
        <br>

        <label for="">
            Descripción del proyecto <br>
            <textarea name="description">{{ old('description', $project->description) }}</textarea>
        </label>
        <br>

        <button type="submit">@lang('Update')</button>
    </form>   
@endsection
