@extends('auth.template')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" id="email" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('email') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                id="exampleInputEmail1" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror"
                id="exampleInputPassword1" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Confirm') }}</label>
            <input type="password" id="password" class="form-control  @error('password_confirmation') is-invalid @enderror"
                id="exampleInputPassword1" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>


        <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">
            {{ __('S\'inscrire') }}
        </button>
    </form>
@endsection
