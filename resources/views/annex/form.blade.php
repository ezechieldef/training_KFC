<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20 hide">
            <strong> <label for="entreprise_id" class="form-label">{{ __('Entreprise Id') }} <span
                        class="text-danger">*</span> </label></strong>
            <input type="text" name="entreprise_id"
                class="form-control rounded-0 @error('entreprise_id') is-invalid @enderror" value="{{ $entreprise->id }}"
                id="entreprise_id" placeholder="Entreprise Id" hidden>
            {!! $errors->first(
                'entreprise_id',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="manager_id" class="form-label">{{ __('Manager Id') }} <span
                        class="text-danger">*</span> </label></strong>

            {{-- <input type="text" name="manager_id"
                class="form-control rounded-0 @error('manager_id') is-invalid @enderror"
                value="{{ old('manager_id', $annex?->manager_id) }}" id="manager_id" placeholder="Manager Id"> --}}

            {{ html()->select('manager_id')->options($managers)->class('form-control form-select rounded-0 ')->value($annex?->manager_id)->placeholder('-- Sélectionner --') }}
            {!! $errors->first('manager_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="nom" class="form-label">{{ __('Nom') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="text" name="nom" class="form-control rounded-0 @error('nom') is-invalid @enderror"
                value="{{ old('nom', $annex?->nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="ville" class="form-label">{{ __('Ville') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="text" name="ville" class="form-control rounded-0 @error('ville') is-invalid @enderror"
                value="{{ old('ville', $annex?->ville) }}" id="ville" placeholder="Ville">
            {!! $errors->first('ville', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
    </div>
</div>
