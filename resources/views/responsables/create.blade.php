@extends('layouts.app')

@section('content')
    <div class="card border border-primary">
        <div class="card-header text-center">
            <h3 class="my-3">Ajouter un parent</h3>

        </div>
        <div class="card-body">

            <form class="my-3" action="{{ route('responsables.store') }}" method="post">

                @include('responsables.form')
                <button class="btn btn-primary" type="submit">@include('include.iconeValidation') Ajouter</button>
                @include('include.boutonAnnulation',['adresseRetour'=> route('responsables.index') ])
            </form>
        </div>
    </div>
@endsection
