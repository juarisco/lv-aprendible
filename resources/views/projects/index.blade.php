@extends('layout')

@section('title','Portafolio')

@section('content')
    
    <h1>@lang('Projects')</h1>
    @auth
        <a href="{{ route('projects.create') }}">Crear un proyecto</a>
    @endauth

    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @empty
            <li>@lang('There\'re not projects to show')</li>
        @endforelse 
    </ul>
    {{ $projects->links() }}
    
@endsection
