@extends('layout')

@section('content')
    <h3 class="my-3">Editer un enfant</h3>
    <form class="my-3" action="{{ route('enfants.update',$enfant->id) }}" method="post">
        @csrf
        @include('enfants.form')
        <button class="btn btn-secondary" type="submit">Modifier</button>
    </form>

@endsection
