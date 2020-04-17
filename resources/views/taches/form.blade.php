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
        <select class="custom-select @error('categorie_tache_id') is-invalid @enderror" name="categorie_tache_id">

            @foreach($categoriesTaches as $categorieTache)
                <option value="{{ $categorieTache->id }}" {{ old('categorie_tache_id')!=null ? (old('categorie_tache_id') == $tache->categorie_tache_id ? 'selected' :''):($tache->categorie_tache_id==$categorieTache->id?'selected':'') }} >{{ $categorieTache->libelle }}</option>
            @endforeach
        </select>
        @error('categorie_tache_id')
        <div class="invalid-feedback">
            {{ $errors->first('categorie_tache_id') }}
        </div>
        @enderror
    </div>
</div>


