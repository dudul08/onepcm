@extends('layout')

@section('content')
    <h3 class="my-3">Supprimer la tâche {{ $tache->libelle }} de la base de données</h3>
    <form action="{{ route('taches.destroy',$tache->id) }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">@include('include.iconeValidation') Confirmer la suppression </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('taches.index')])
    </form>


@endsection
