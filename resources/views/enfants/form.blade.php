@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Prénom : </label>
    <div class="col-sm-3">
        <input class="form-control @error('prenom') is-invalid @enderror " type="text" name="prenom"
               value="{{ old('prenom') ?? $enfant->prenom }}">
        @error('prenom')
        <div class="invalid-feedback">
            {{ $errors->first('prenom') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Nom : </label>
    <div class="col-sm-3">
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
               value="{{ old('name') ?? $enfant->name }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Pseudo : </label>
    <div class="col-sm-3">
        <input class="form-control @error('pseudo') is-invalid @enderror" type="text" name="pseudo"
               value="{{ old('pseudo') ?? $enfant->pseudo }}">
        @error('pseudo')
        <div class="invalid-feedback">
            {{ $errors->first('pseudo') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Date de naissance : </label>
    <div class="col-sm-3">
        <input class="form-control  @error('date_naissance') is-invalid @enderror" type="date" name="date_naissance"
               value="{{  old('date_naissance') ?? $enfant->date_naissance }}">
        @error('date_naissance')
        <div class="invalid-feedback">
            {{ $errors->first('date_naissance') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Sexe : </label>
    <div class="col-sm-3">
        <select class="custom-select @error('genre') is-invalid @enderror" name="genre">

            @foreach($enfant->getTableauGenre() as $id_genre =>$genreLibelle)
                <option
                    value="{{ $id_genre }}" {{ old('genre')!=null ? (old('genre') == $id_genre ? 'selected' :''):($enfant->genre==$id_genre?'selected':'') }} >{{ $genreLibelle }}</option>
            @endforeach
        </select>
        @error('genre')
        <div class="invalid-feedback">
            {{ $errors->first('genre') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Email : </label>
    <div class="col-sm-3">
        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
               value="{{ old('email') ?? $enfant->email }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Mot de passe : </label>
    <div class="col-sm-3">
        <input class="form-control @error('password') is-invalid @enderror" type="text" name="password"
               value="{{ old('password') ?? $enfant->password }}">
        @error('password')
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
        @enderror
    </div>
</div>
