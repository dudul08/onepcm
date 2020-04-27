@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Liste des bons points</h2>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('bonspoints.create') }}"><i class="ri-group-line"></i>
                Ajouter un bon point</a>

            <table class="table-responsive table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col" class="col-2">#</th>
                    <th scope="col" class="col-2">Libellé</th>
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
@endsection
