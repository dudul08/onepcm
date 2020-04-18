@extends('layouts.app')

@section('content')
    <a class="btn btn-primary my-3" href="{{ route('taches.create') }}"><i class="ri-tools-line"></i> Ajouter une
        tâche </a>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Libellé</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Nombre de points</th>
            <th scope="col">Nombre de points bonus</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($taches as $tache)
            <tr>
                <th scope="row">{{ $tache->id }}</th>
                <td>{{ $tache->libelle }}</td>
                <td>{{ $tache->categorieTache->libelle }}</td>
                <td>{{ $tache->nombre_points }}</td>
                <td>{{ $tache->nombre_points_bonus }}</td>
                <td>
                    <a class="btn btn-secondary mb-1" href="{{ route('taches.edit',$tache->id) }}"><i
                            class="ri-pencil-line"></i> </a>
                    <a class="btn btn-danger mb-1" href="{{ route('taches.confirmation',$tache->id) }}"><i
                            class="ri-delete-bin-7-line"></i> </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
