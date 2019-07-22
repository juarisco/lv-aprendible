@extends('layout')

@section('title','Portafolio')

@section('content')
    
    <h1>@lang('Portafolio')</h1>

    <ul>
        @forelse ($projects as $project)
            <li>{{ $project->title }}</li>
        @empty
            <li>@lang('There\'s not projects to show')</li>
        @endforelse 
    </ul>
    {{ $projects->links() }}
    
@endsection
