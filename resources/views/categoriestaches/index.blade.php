@extends('layout')

@section('content')
    <a class="btn btn-primary my-3" href="{{ route('categoriestaches.create') }}"><i class="ri-group-line"></i> Ajouter une catégorie</a>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Libellé</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categoriesTaches as $categorieTache)
            <tr>
                <th scope="row">{{ $categorieTache->id }}</th>
                <td>{{ $categorieTache->libelle }}</td>
                <td>
                    <a class="btn btn-secondary mb-1" href="{{ route('categoriestaches.edit',$categorieTache->id) }}"><i class="ri-pencil-line"></i>    </a>
                    <a class="btn btn-danger mb-1" href="{{ route('categoriestaches.confirmation',$categorieTache->id) }}"><i class="ri-delete-bin-7-line"></i>  </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
