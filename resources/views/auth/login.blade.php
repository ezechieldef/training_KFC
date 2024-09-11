@extends('auth.template')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror"
                id="exampleInputPassword1" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>



        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input primary" type="checkbox" {{ old('remember') ? 'checked' : '' }}
                    name="remember" id="remember">
                <label class="form-check-label text-dark" for="remember">
                    {{ __('Restez-connecté') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="text-primary fw-bold" href="{{ route('password.request') }}">Mot de passe oublié ? </a>
            @endif
        </div>

        <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">
            {{ __('Se connecter') }}
        </button>
        <div class="text-center">
            <p class="fs-4 mb-0 mb-3">Vous n'êtes pas encore inscrit ?</p>
            <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">S'inscrire</a>
        </div>

    </form>
@endsection
