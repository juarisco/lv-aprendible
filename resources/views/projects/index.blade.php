@extends('layout')

@section('title','Portafolio')

@section('content')
    
    <h1>@lang('Portafolio')</h1>

    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @empty
            <li>@lang('There\'re not projects to show')</li>
        @endforelse 
    </ul>
    {{ $projects->links() }}
    
@endsection
