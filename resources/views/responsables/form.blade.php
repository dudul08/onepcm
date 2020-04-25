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
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                   value="{{ old('name') ?? $responsable->nom }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
            @enderror
        </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Email : </label>
    <div class="col-sm-5">
        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
               value="{{ old('email') ?? $responsable->email }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nome">Mot de passe : </label>
    <div class="col-sm-5">
        <input class="form-control @error('password') is-invalid @enderror" type="text" name="password"
               value="{{ old('password') ?? $responsable->password }}">
        @error('password')
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
        @enderror
    </div>
</div>

