@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Statistiques</h2>
        </div>
        <div id="app">
            <main-statistiques-component tableau-routes={{json_encode(['calcul'=>route('bonspoints.calcul')]) }}></main-statistiques-component>
        </div>
    </div>
@endsection
