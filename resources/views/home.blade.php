@extends('layouts.app')

@section('title')
    Home
@endsection

@section('link')
            <a class="navbar-brand" href="{{ url('/regle') }}">Regle</a>
            <a class="navbar-brand" href="{{ url('/scenario') }}">Scenario</a>
@endsection

@section('content')
        <div class="content">
            <div class="title m-b-md">
                RPG-Support
            </div>
        </div>
@endsection