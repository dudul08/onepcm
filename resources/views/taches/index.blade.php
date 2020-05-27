@extends('layouts.app')

@section('content')
    <div class="card border border-primary">
        <div class="card-header text-center">
            <h2>Liste des tâches</h2>
        </div>
        <div class="card-body ">
            <a class="btn btn-primary mb-3" href="{{ route('taches.create') }}"><i class="ri-tools-line"></i> Ajouter
                une
                tâche </a>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" class="col-1">#</th>
                        <th scope="col" class="col-2">Libellé</th>
                        <th scope="col" class="col-2">Catégorie</th>
                        <th scope="col" class="col-2">Nombre de points</th>
                        <th scope="col" class="col-2">Nombre de points bonus</th>
                        <th scope="col" class="col-2">Action</th>
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
            </div>
        </div>
    </div>
@endsection
