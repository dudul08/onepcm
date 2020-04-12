@extends('layout')

@section('content')

    <a class="btn btn-primary my-3" href="{{ route('enfants.create') }}">Ajouter un enfant <span class="fas fa-baby"></span></a>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Sexe</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($enfant as $enfant)
            <tr>
                <th scope="row">{{ $enfant->id }}</th>
                <td>{{ $enfant->prenom }}</td>
                <td>{{ $enfant->nom }}</td>
                <td>{{ $enfant->getGenreLibelle() }}</td>
                <td>{{ $enfant->age() }}</td>
                <td>
                    <a class="btn btn-secondary" href="{{ route('enfants.edit',$enfant->id) }}">Editer <span class="far fa-edit"></span></a>
                    <a class="btn btn-danger" href="{{ route('enfants.confirmation',$enfant->id) }}">Supprimer <span class="fas fa-eraser"></span></a>
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
