@extends('layout')

@section('content')

    <form class="my-3" action="{{ route('enfants.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Prénom : </label>
            <div class="col-sm-5">
                <input class="form-control " type="text" name="prenom" id="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Nom : </label>
            <div class="col-sm-5">
                <input class="form-control " type="text" name="nom" id="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Date de naissance : </label>
            <div class="col-sm-2">
                <input class="form-control  @error('date_naissance') is-invalid @enderror" type="date" name="date_naissance" id="">
                @error('date_naissance')
                <div class="invalid-feedback">
                   Ce champ est obligatoire !
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Sexe : </label>
            <div class="col-sm-2">
                <select class="custom-select" name="genre">
                    <option selected>Choisir ...</option>
                    <option value="0">Fille</option>
                    <option value="1">Garçon</option>
                </select>
            </div>
        </div>
        <button class="btn btn-danger"type="submit">Ajouter l'enfant</button>
    </form>

@endsection
