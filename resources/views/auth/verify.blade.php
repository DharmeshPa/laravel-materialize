@extends('layouts.master')
@section('content')
<div class="card">
    <div class="row">
        <div class="col s12">
            <h3 class="card-title">{{ __('Verify Your Email Address') }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card-content">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>        
        </div>
    </div>
</div>
@endsection