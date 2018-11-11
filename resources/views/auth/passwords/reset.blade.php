@extends('layouts.master')
@section('content')
<form method="POST" action="{{ route('password.update') }}">
@csrf
<input type="hidden" name="token" value="{{ $token }}">
<div class="card z-depth-0" style="margin:0px;">
    <div class="card-content">
        <div class="row">
            <div class="col s12">
                <h3 class="card-title">{{ __('Reset Password') }}</h3>
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
            <div class="input-field col s6">
                <input placeholder="Placeholder" name="password_confirmation" id="password_confirmation" type="password" required>
                <label for="password-confirm">{{ __('Password confirm') }}</label>
            </div>
        </div>
    </div>
    <div class="card-action">
        <button type="submit" class="btn btn-primary">
            {{ __('Reset Password') }}
        </button>
    </div>
</div>
</form>
@endsection