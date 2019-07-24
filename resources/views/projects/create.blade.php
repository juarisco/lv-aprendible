@extends('layout')

@section('title','Crear proyecto')

@section('content')
    
    <h1>@lang('Create New Project')</h1>

    @include('partials.validation-errors')

    <form action="{{ route('projects.store') }}" method="post">
        
        @include('projects._form', ['btnText' => __('Save')])
        
    </form>   
@endsection
