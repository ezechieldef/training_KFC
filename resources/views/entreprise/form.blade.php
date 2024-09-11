<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <strong> <label for="raison_social" class="form-label">{{ __('Raison Social') }} <span
                        class="text-danger">*</span> </label></strong>
            <input type="text" name="raison_social"
                class="form-control rounded-0 @error('raison_social') is-invalid @enderror"
                value="{{ old('raison_social', $entreprise?->raison_social) }}" id="raison_social"
                placeholder="Raison Social" required>
            {!! $errors->first(
                'raison_social',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="ifu" class="form-label">{{ __('IFU') }} <span class="text-danger">*</span>
                </label></strong>
            <input type="text" minlength="13" maxlength="13" pattern="[0-9]{13}" name="ifu" required
                class="form-control rounded-0 @error('ifu') is-invalid @enderror"
                value="{{ old('ifu', $entreprise?->ifu) }}" id="ifu" placeholder="Ifu">
            {!! $errors->first('ifu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="pays" class="form-label">{{ __('Pays') }}
                </label></strong>
            <input type="text" name="pays" class="form-control rounded-0 @error('pays') is-invalid @enderror"
                value="{{ old('pays', $entreprise?->pays) }}" id="pays" placeholder="Pays">
            {!! $errors->first('pays', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <strong> <label for="logo" class="form-label">{{ __('Logo') }}
                </label></strong>
            <input type="file" name="logo" class="form-control rounded-0 @error('logo') is-invalid @enderror"
                value="{{ old('logo', $entreprise?->logo) }}" id="logo" placeholder="Logo">
            {!! $errors->first('logo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
    </div>
</div>
