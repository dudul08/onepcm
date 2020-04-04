@extends('layout')

@section('content')

    <form class="my-3" action="{{ route('enfants.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Prénom : </label>
            <div class="col-sm-5">
                <input class="form-control @error('prenom') is-invalid @enderror " type="text" name="prenom" id="">
                @error('prenom')
                <div class="invalid-feedback">
                    {{ $errors->first() }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Nom : </label>
            <div class="col-sm-5">
                <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="">
                @error('nom')
                <div class="invalid-feedback">
                    {{ $errors->first() }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Date de naissance : </label>
            <div class="col-sm-2">
                <input class="form-control  @error('date_naissance') is-invalid @enderror" type="date"
                       name="date_naissance" id="">
                @error('date_naissance')
                <div class="invalid-feedback">
                    {{ $errors->first() }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Sexe : </label>
            <div class="col-sm-2">
                <select class="custom-select @error('genre') is-invalid @enderror" name="genre">
                    <option selected></option>
                    <option value="0">Fille</option>
                    <option value="1">Garçon</option>
                </select>
                @error('genre')
                <div class="invalid-feedback">
                    {{ $errors->first() }}
                </div>
                @enderror
            </div>
        </div>
        <button class="btn btn-danger" type="submit">Ajouter l'enfant</button>
    </form>

@endsection
