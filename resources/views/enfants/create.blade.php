@extends('layout')

@section('content')
    <h3 class="my-3">Ajouter un enfant</h3>
    <form class="my-3" action="{{ route('enfants.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome">Prénom : </label>
            <div class="col-sm-5">
                <input class="form-control @error('prenom') is-invalid @enderror " type="text" name="prenom" value="{{ old('prenom') }}">
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
                <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" value="{{ old('nom') }}">
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
                       name="date_naissance" id="" value="{{ old('date_naissance') }}">
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
                <select class="custom-select @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}">
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
        <button class="btn btn-secondary" type="submit">Ajouter</button>
    </form>

@endsection
