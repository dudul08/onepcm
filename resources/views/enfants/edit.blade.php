@extends('layouts.app')

@section('content')
    <h3 class="my-3">Modifier les informations de {{ $enfant->prenom  . ' ' . $enfant->nom }} </h3>
    <form class="my-3" action="{{ route('enfants.update',$enfant->id) }}" method="post">
        @method('PATCH')
        @include('enfants.form')
        <button class="btn btn-primary" type="submit"> @include('include.iconeValidation') Modifier </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('enfants.index')])

    </form>

@endsection
