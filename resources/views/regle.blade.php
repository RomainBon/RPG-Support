@extends('layouts.app')

@section('title')
    Regle
@endsection

@section('link')
            <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
            <a class="navbar-brand" href="{{ url('/scenario') }}">Scenario</a>
@endsection

@section('content')
<h1>Regle :</h1>
<form>
<p>{{ $regle->name}}</p>
</form>

@endsection