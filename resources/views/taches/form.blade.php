@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Libellé : </label>
    <div class="col-sm-5">
        <input class="form-control @error('libelle') is-invalid @enderror " type="text" name="libelle"
               value="{{ old('libelle') ?? $tache->libelle }}">
        @error('libelle')
        <div class="invalid-feedback">
            {{ $errors->first('libelle') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Catégorie : </label>
    <div class="col-sm-2">
        <select class="custom-select @error('id_categorie_taches') is-invalid @enderror" name="id_categorie_taches">

            @foreach($categoriesTaches as $categorieTache)
                <option value="{{ $categorieTache->id }}" >{{ $categorieTache->libelle }}</option>
            @endforeach
        </select>
        @error('id_categorie_taches')
        <div class="invalid-feedback">
            {{ $errors->first('id_categorie_taches') }}
        </div>
        @enderror
    </div>
</div>


