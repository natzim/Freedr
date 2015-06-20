@extends('master')

@section('layout')
    <nav class="red" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/" class="brand-logo">freedr</a>
            <ul class="right hide-on-med-and-down">
                @if (Auth::check())
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/auth/logout">Logout</a></li>
                @else
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
@endsection