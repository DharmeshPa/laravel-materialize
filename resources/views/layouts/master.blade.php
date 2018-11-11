<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel,Vue and Materlise CSS') }}</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
  <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  @guest
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{route('register')}}">Register</a></li>
  @else
  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
  @endguest
</ul>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<nav>
    <div class="row">
        <div class="col s12">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Vue Laravel</a>
                <ul class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    @else
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Loggedin as: {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
                    @endguest  
                </ul>
            </div>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<script>
$(document).ready(function($){
    $(".dropdown-trigger").dropdown();
});
</script>
</html>
