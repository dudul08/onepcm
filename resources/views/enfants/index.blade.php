@extends('layout')

@section('content')


    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($enfant as $enfant)
            <tr>
                <th scope="row">{{ $enfant->id }}</th>
                <td>{{ $enfant->prenom }}</td>
                <td>{{ $enfant->nom }}</td>
                <td><a class="btn btn-secondary" href="{{ route('enfants.edit',$enfant->id) }}">Editer</a></td>


            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
