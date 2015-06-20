@extends('master')

@section('layout')
    <div class="row">
        <div class="col s2">
            <ul class="side-nav fixed">
                <li class="logo">
                    <a class="brand-logo" href="/">LOGO HERE</a>
                </li>
                <li class="bold">
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/dashboard/find">Find</a>
                </li>
                <li>
                    <a href="/dashboard/profile">Profile</a>
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