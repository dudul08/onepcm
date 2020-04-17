@extends('layout')

@section('content')
    <h3 class="my-3">Ajouter une tâche</h3>
    <form class="my-3" action="{{ route('taches.store') }}" method="post">

        @include('taches.form')
        <button class="btn btn-primary" type="submit">@include('include.iconeValidation') Ajouter </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('taches.index') ])
    </form>

@endsection
