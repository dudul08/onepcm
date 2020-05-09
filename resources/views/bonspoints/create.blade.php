@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3 class="my-3">Ajouter un Bon point : </h3>
        </div>
        <div class="card-body">
            <div id="app">
                   <create-component tableau-routes={{ json_encode(['enfantsListe'=>route('enfants.liste'),'tachesListe'=>route('taches.liste'),'responsablesListe'=>route('responsables.liste')]) }} url="{{ config('app.url') }}" icon-validation="ri-check-line"  user-id="{{ Auth::user()->id }}" />
            </div>

        </div>
    </div>
@endsection
