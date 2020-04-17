@extends('layout')

@section('content')
    <h3 class="my-3">Modifier les informations de {{ $responsable->prenom  . ' ' . $responsable->nom }} </h3>
    <form class="my-3" action="{{ route('responsables.update',$responsable->id) }}" method="post">
        @method('PATCH')
        @include('responsables.form')
        <button class="btn btn-primary" type="submit"> @include('include.iconeValidation') Modifier </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('responsables.index')])

    </form>

@endsection
