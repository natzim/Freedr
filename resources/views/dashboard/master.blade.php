@extends('master')

@section('layout')
    <div class="row">
        <div class="col s2">
            <ul class="side-nav fixed">
                <li class="logo">
                    <a class="brand-logo" href="/">
                        <img src="/img/logo.png" alt="freedr">
                    </a>
                </li>
                <li class="divider"></li>
                <li class="bold">
                    <a href="/dashboard">
                        <i class="mdi-action-dashboard"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="/dashboard/find">
                        <i class="mdi-action-search"></i> Find
                    </a>
                </li>
                <li>
                    <a href="/dashboard/profile">
                        <i class="mdi-social-person"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="/dashboard/projects">Projects</a>
                </li>
                <li>
                    <a href="/dashboard/matches">Matches</a>
                </li>
            </ul>
        </div>
        <div class="col s10 offset-s2">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
@endsection