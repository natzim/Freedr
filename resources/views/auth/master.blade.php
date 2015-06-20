@extends('master')

@section('layout')
    <nav class="red" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/" class="brand-logo">freedr</a>
            <ul class="right hide-on-med-and-down">
                @if (Auth::check())
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ route('auth.login') }}">Login</a></li>
                    <li><a href="{{ route('auth.register') }}">Register</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
@endsection