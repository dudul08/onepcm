@extends('layout')

@section('content')
    <h3 class="my-3">Supprimer {{ $enfant->prenom . ' ' . $enfant->nom }} de la base de données</h3>
    <form action="{{ route('enfants.destroy',$enfant->id) }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">@include('include.iconeValidation') Confirmer la suppression </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('enfants.index')])
    </form>


@endsection
