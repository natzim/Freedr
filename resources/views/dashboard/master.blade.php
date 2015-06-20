@extends('master')

@section('layout')
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
            <a href="/dashboard/projects">
                <i class="mdi-action-wallet-travel"></i> Projects
            </a>
        </li>
        <li>
            <a href="/dashboard/matches">
                <i class="mdi-action-grade"></i> Matches
            </a>
        </li>
    </ul>
    <main style="padding-left: 240px;">
        @yield('content')
    </main>
@endsection