@csrf
<div class="form-group row">
    <label class="col-sm-1 col-form-label" for="nome">Libellé : </label>
    <div class="col-sm-3">
        <input class="form-control @error('libelle') is-invalid @enderror " type="text" name="libelle" value="{{ old('libelle') ?? $categorieTache->libelle }}">
        @error('libelle')
        <div class="invalid-feedback">
            {{ $errors->first('libelle') }}
        </div>
        @enderror
    </div>
</div>



