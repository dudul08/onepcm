@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Prénom : </label>
    <div class="col-sm-5">
        <input class="form-control @error('prenom') is-invalid @enderror " type="text" name="prenom"
               value="{{ old('prenom') ?? $responsable->prenom }}">
        @error('prenom')
        <div class="invalid-feedback">
            {{ $errors->first('prenom') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Nom : </label>
    <div class="col-sm-5">
        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom"
               value="{{ old('nom') ?? $responsable->nom }}">
        @error('nom')
        <div class="invalid-feedback">
            {{ $errors->first('nom') }}
        </div>
        @enderror
    </div>
</div>


