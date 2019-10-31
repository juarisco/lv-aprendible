@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validation-errors')
                
                <form class="bg-white py-3 px-4 shadow rounded" 
                    action="{{ route('projects.store') }}" 
                    method="post"
                    enctype="multipart/form-data">
                        <h1 class="display-4">@lang('New Project')</h1>
                        <hr>
                        @include('projects._form', ['btnText' => __('Save')])
                        
                </form>
            </div>
        </div> 
    </div>
@endsection
