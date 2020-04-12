@extends('layout')

@section('content')
    <h3 class="my-3">Ajouter un enfant</h3>
    <form class="my-3" action="{{ route('enfants.store') }}" method="post">

        @include('enfants.form')
        <button class="btn btn-primary" type="submit">Ajouter <span class="fas fa-check"></button>
    </form>

@endsection
