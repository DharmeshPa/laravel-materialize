@extends('layouts.master')
@section('content')
<form method="POST" action="{{ route('register') }}">
@csrf
    <div class="card z-depth-0" style="margin:0px;">
        <div class="card-content">
            <div class="row">
                <div class="col s12">
                    <h3 class="card-title">{{ __('Register') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    <label for="name" class="">{{ __('Name') }}</label>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            
                <div class="input-field col s6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            
                <div class="input-field col s6">
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password" class="">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            
                <div class="input-field col s6">
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required>
                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                </div>
            </div>
        </div>
        <div class="card-action">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>       
@endsection
