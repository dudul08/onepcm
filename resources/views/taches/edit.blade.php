@extends('layout')

@section('content')
    <h3 class="my-3">Modifier les informations de la tache {{ $tache->libelle }} </h3>
    <form class="my-3" action="{{ route('taches.update',$tache->id) }}" method="post">
        @method('PATCH')
        @include('taches.form')
        <button class="btn btn-primary" type="submit"> @include('include.iconeValidation') Modifier </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('taches.index')])

    </form>

@endsection
