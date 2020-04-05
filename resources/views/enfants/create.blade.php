@extends('layout')

@section('content')
    <h3 class="my-3">Ajouter un enfant</h3>
    <form class="my-3" action="{{ route('enfants.store') }}" method="post">
        @csrf
        @include('enfants.form')
        <button class="btn btn-secondary" type="submit">Ajouter</button>
    </form>

@endsection
