@extends('layout')

@section('content')
    <a class="btn btn-primary my-3" href="{{ route('categoriestaches.create') }}">@include('include.iconeAjout') Ajouter un parent <span class="fas fa-baby"></span></a>

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
        @foreach ($responsables as $responsable)
            <tr>
                <th scope="row">{{ $responsable->id }}</th>
                <td>{{ $responsable->prenom }}</td>
                <td>{{ $responsable->nom }}</td>
                <td>
                    <a class="btn btn-secondary mb-1" href="{{ route('categoriestaches.edit',$responsable->id) }}"><i class="ri-pencil-line"></i>    </a>
                    <a class="btn btn-danger mb-1" href="{{ route('categoriestaches.confirmation',$responsable->id) }}"><i class="ri-delete-bin-7-line"></i>  </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
