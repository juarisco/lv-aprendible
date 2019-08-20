@extends('layout')

@section('title','Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">@lang('Web Development')</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maxime error ipsum. Ratione, qui iusto. Obcaecati repellat aperiam dignissimos consequuntur ullam tempora libero fuga. Rem ea eveniet quo placeat unde?</p>
                <a href="{{ route('contact') }}" class="btn btn-lg btn-block btn-primary">@lang('Contact Us')</a>
                <a href="{{ route('projects.index') }}" class="btn btn-lg btn-block btn-outline-primary">@lang('Portfolio')</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid py-4" src="/img/home.svg" alt="{{ __('Web Development') }}">
            </div>
        </div>
    </div>
@endsection
