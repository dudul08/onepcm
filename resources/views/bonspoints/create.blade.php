@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3 class="my-3">Ajouter un Bon point : </h3>
        </div>
        <div class="card-body">
            <div id="app">
                   <create-component icon-validation="ri-check-line" url-liste-responsables="{{ route('responsables.liste') }}"></create-component>
            </div>

        </div>
    </div>
@endsection
