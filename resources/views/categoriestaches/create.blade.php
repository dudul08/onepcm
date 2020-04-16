@extends('layout')

@section('content')
    <h3 class="my-3">Ajouter un parent</h3>
    <form class="my-3" action="{{ route('categoriestaches.store') }}" method="post">

        @include('categoriestaches.form')
        <button class="btn btn-primary" type="submit">@include('include.iconeValidation') Ajouter </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('categoriestaches.index') ])
    </form>

@endsection
