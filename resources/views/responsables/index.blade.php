@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Liste des parents</h2>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3"
               href="{{ route('responsables.create') }}">@include('include.iconeAjoutEnfantResponsable') Ajouter un
                parent </a>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" class="col-1">#</th>
                        <th scope="col" class="col-2">Prénom</th>
                        <th scope="col" class="col-2">Nom</th>
                        <th scope="col" class="col-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($responsables as $responsable)
                        <tr>
                            <th scope="row">{{ $responsable->id }}</th>
                            <td>{{ $responsable->prenom }}</td>
                            <td>{{ $responsable->name }}</td>
                            <td>
                                <a class="btn btn-secondary mb-1"
                                   href="{{ route('responsables.edit',$responsable->id) }}"><i
                                        class="ri-pencil-line"></i> </a>
                                <a class="btn btn-danger mb-1"
                                   href="{{ route('responsables.confirmation',$responsable->id) }}"><i
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
