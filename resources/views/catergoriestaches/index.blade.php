@extends('layout')

@section('content')
    <a class="btn btn-primary my-3" href="{{ route('categoriestaches.create') }}">@include('include.iconeAjout') Ajouter un parent <span class="fas fa-baby"></span></a>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Libellé</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categoriestaches as $categorietache)
            <tr>
                <th scope="row">{{ $categorietache->id }}</th>
                <td>{{ $categorietache->libelle }}</td>
                <td>
                    <a class="btn btn-secondary mb-1" href="{{ route('categoriestaches.edit',$responsable->id) }}"><i class="ri-pencil-line"></i>    </a>
                    <a class="btn btn-danger mb-1" href="{{ route('categoriestaches.confirmation',$responsable->id) }}"><i class="ri-delete-bin-7-line"></i>  </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
