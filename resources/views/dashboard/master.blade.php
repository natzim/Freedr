@extends('master')

@section('layout')
    <ul class="side-nav fixed">
        <li class="logo" style="padding-bottom: 115px; padding-top: 25px; padding-left: 30px;">
            <a class="brand-logo" href="/">
                <img src="/img/logo.png" alt="freedr" height="150" width="150">
            </a>
        </li>
        <li class="divider"></li>
        <li class="bold {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="waves-effect waves-red" href="{{ route('dashboard') }}">
                <i class="mdi-action-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="{{ Request::is('dashboard/find*') ? 'active' : '' }}">
            <a class="waves-effect waves-red" href="{{ route('dashboard.find') }}">
                <i class="mdi-action-search"></i> Find
            </a>
        </li>
        <li class="{{ Request::is('dashboard/profile*') ? 'active' : '' }}">
            <a class="waves-effect waves-red" href="{{ route('dashboard.profile') }}">
                <i class="mdi-social-person"></i> Profile
            </a>
        </li>
        <li class="{{ Request::is('dashboard/project*') ? 'active' : '' }}">
            <a class="waves-effect waves-red" href="{{ route('dashboard.projects') }}">
                <i class="mdi-action-wallet-travel"></i> Projects
            </a>
        </li>
        <li class="{{ Request::is('dashboard/matches*') ? 'active' : '' }}">
            <a class="waves-effect waves-red" href="{{ route('dashboard.matches') }}">
                <i class="mdi-action-grade"></i> Matches
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="waves-effect waves-red" href="{{ route('auth.logout') }}">
                <i class="mdi-action-exit-to-app"></i> Logout
            </a>
        </li>
    </ul>
    <main style="padding-left: 240px;">
        @yield('content')
    </main>
@endsection