@extends('layouts.app')

@section('content')
<div class="row">

    <div class="card">
        <div class="col m8">
            <div class="card-header>
                <div class="card-title loginTitle"><strong>{{ __('Entrar') }}</strong></div>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 m4">
                                <button type="submit" class="btn btn-login">
                                    {{ __('Entrar') }}
                                </button>
                            </div>
                            <div class="col s12 m4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>
                            <div class="col s12 m3">
                            </div>
                            <div class="col s12 m3">
                                <button type="submit" class="btn waves-effect red lighten-3">
                                    {{ __('Cancelar y Salir') }}
                                </button>
                            </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>

@endsection
