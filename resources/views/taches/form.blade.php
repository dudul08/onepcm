@csrf
<div class="form-group row">
    <label class="col-sm-3 col-form-label" for="nome">Libellé : </label>
    <div class="col-sm-3">
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
    <label class="col-sm-3 col-form-label" for="nome">Catégorie : </label>
    <div class="col-sm-3">
        <select class="custom-select @error('categorie_tache_id') is-invalid @enderror" name="categorie_tache_id">

            @foreach($categoriesTaches as $categorieTache)
                <option value="{{ $categorieTache->id }}" {{ old('categorie_tache_id')!=null ? (old('categorie_tache_id') == $categorieTache->id ? 'selected' :''):($tache->categorie_tache_id==$categorieTache->id?'selected':'') }} >{{ $categorieTache->libelle }}</option>
            @endforeach
        </select>
        @error('categorie_tache_id')
        <div class="invalid-feedback">
            {{ $errors->first('categorie_tache_id') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label" for="nome">Nombre de points : </label>
    <div class="col-sm-3">
        <input class="form-control @error('nombre_points') is-invalid @enderror " type="text" name="nombre_points"
               value="{{ old('nombre_points') ?? $tache->nombre_points }}">
        @error('nombre_points')
        <div class="invalid-feedback">
            {{ $errors->first('nombre_points') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label" for="nome">Nombre de points bonus :</label>
    <div class="col-sm-3">
        <input class="form-control @error('nombre_points_bonus') is-invalid @enderror " type="text" name="nombre_points_bonus"
               value="{{ old('nombre_points_bonus') ?? $tache->nombre_points_bonus }}">
        @error('nombre_points_bonus')
        <div class="invalid-feedback">
            {{ $errors->first('nombre_points_bonus') }}
        </div>
        @enderror
    </div>
</div>

