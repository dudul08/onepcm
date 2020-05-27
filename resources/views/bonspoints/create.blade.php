@extends('layouts.app')

@section('content')
    <div class="card border border-primary">
        <div class="card-header text-center ">
            <h3 class="my-3">Ajouter des bons points </h3>
        </div>
        <div class="card-body">
            <div id="app">
                   <main-create-component tableau-routes={{ json_encode(['enfantsListe'=>route('enfants.liste'),'tachesListe'=>route('taches.liste'),'responsablesListe'=>route('responsables.liste'),'bonsPointsStore'=>route('bonspoints.store'),'bonsPointsListe'=>route('bonspoints.index')]) }} icon-validation="ri-check-line"  user-id="{{ Auth::user()->id }}" />
            </div>

        </div>
    </div>
@endsection
