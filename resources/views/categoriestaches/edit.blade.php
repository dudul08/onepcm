@extends('layout')

@section('content')
    <h3 class="my-3">Modifier les informations de la catégorie {{ $categorieTache->libelle }} </h3>
    <form class="my-3" action="{{ route('categoriestaches.update',$categorieTache->id) }}" method="post">
        @method('PATCH')
        @include('categoriestaches.form')
        <button class="btn btn-primary" type="submit"> @include('include.iconeValidation') Modifier </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('categoriestaches.index')])

    </form>

@endsection
