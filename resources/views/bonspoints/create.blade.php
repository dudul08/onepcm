@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3 class="my-3">Ajouter un Bon point : </h3>
        </div>
        <div class="card-body">
            <div id="app">
                   <create-component routes={{ json_encode(['route1'=>route('enfants.liste'),'route2'=>route('taches.liste')]) }} url="{{ config('app.url') }}" icon-validation="ri-check-line"  user-id="{{ Auth::user()->id }}" />
            </div>

        </div>
    </div>
@endsection
