@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Liste des bons points</h2>
        </div>
        <div class="card-body table-responsive">
            <a class="btn btn-primary mb-3" href="{{ route('bonspoints.create') }}"><i class="ri-group-line"></i>
                Ajouter un bon point</a>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" class="col-2">Enfant</th>
                        <th scope="col" class="col-2">Responsable</th>
                        <th scope="col" class="col-2">Date</th>
                        <th scope="col" class="col-2">Tache</th>
                        <th scope="col" class="col-2">Points</th>
                        <th scope="col" class="col-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--                @foreach ($categoriesTaches as $categorieTache)
                                        <tr>
                                            <th scope="row">{{ $categorieTache->id }}</th>
                                            <td>{{ $categorieTache->libelle }}</td>
                                            <td>
                                                <a class="btn btn-secondary mb-1"
                                                   href="{{ route('bonspoints.edit',$categorieTache->id) }}"><i
                                                        class="ri-pencil-line"></i> </a>
                                                <a class="btn btn-danger mb-1"
                                                   href="{{ route('.confirmation',$categorieTache->id) }}"><i
                                                        class="ri-delete-bin-7-line"></i> </a>
                                            </td>

                                        </tr>
                                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
