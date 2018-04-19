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
<form action=''>
    <label>Jeu de Rôle :</label>
    <select name='idJdr' id='jdr'>
        @foreach($regles as $regle)
            <option value={{ $regle->id }} 
                @if($regle1->id==$regle->id) 
                    <?php echo 'selected'; ?>
                @endif
            > {{ $regle->name }}</option>
        @endforeach
    </select>
    <input type='submit'/>
</form>

@endsection