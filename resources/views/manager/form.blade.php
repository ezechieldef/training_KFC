<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <strong> <label for="nom" class="form-label">{{ __('Nom') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="text" name="nom" class="form-control rounded-0 @error('nom') is-invalid @enderror"
                value="{{ old('nom', $manager?->nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="prenom" class="form-label">{{ __('Prenom') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="text" name="prenom" class="form-control rounded-0 @error('prenom') is-invalid @enderror"
                value="{{ old('prenom', $manager?->prenom) }}" id="prenom" placeholder="Prenom">
            {!! $errors->first('prenom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="email" class="form-label">{{ __('Email') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"
                class="form-control rounded-0 @error('email') is-invalid @enderror"
                value="{{ old('email', $manager?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="telephone" class="form-label">{{ __('Telephone') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="tel" name="telephone" minlength="8"
                class="form-control rounded-0 @error('telephone') is-invalid @enderror"
                value="{{ old('telephone', $manager?->telephone) }}" id="telephone" placeholder="Telephone">
            {!! $errors->first('telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
    </div>
</div>
