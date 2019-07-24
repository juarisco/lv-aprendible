@extends('layout')

@section('title','Editar proyecto')

@section('content')
    
    <h1>@lang('Edit Project')</h1>

    @include('partials.validation-errors')

    <form action="{{ route('projects.update', $project) }}" method="post">
        @method('PATCH')
        
        @include('projects._form', ['btnText' => __('Update')])

    </form>   
@endsection
