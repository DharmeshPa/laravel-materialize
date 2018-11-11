@extends('layouts.master')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="card z-depth-0" style="margin:0px;">
        <div class="card-content">
            <div class="row">
                <div class="col s12">
                    <h3 class="card-title">{{ __('Login') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="email" placeholder="Placeholder" id="email" type="email" required autofocus value="{{ old('email') }}" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    @if ($errors->has('email'))
                        <span class="helper-text text-danger" data-error="wrong" data-success="right">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" name="password" id="password" type="password" required value="{{ old('password') }}" class="validate {{ $errors->has('password') ? ' is-invalid' : '' }}">
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="helper-text text-danger" data-error="wrong" data-success="right">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label>
                        <input type="checkbox" class="filled-in" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}   />
                        <span>{{ __('Remember Me') }}</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-action">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
    </div>
</form>
@endsection
