@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3 class="my-3">Ajouter un Bon point : </h3>
        </div>
        <div class="card-body">
            <div id="app">
                   <create-component icon-validation="ri-check-line"  user-id="{{ Auth::user()->id }}" url-liste-taches="{{ route('taches.liste') }}"  url-liste-enfants="{{ route('enfants.liste') }}" url-liste-responsables="{{ route('responsables.liste') }}"/>
            </div>

        </div>
    </div>
@endsection
