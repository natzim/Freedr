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
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">freedr</h1>
            <div class="row center">
                <h5 class="header col s12 light">Like Tinder, for freelancers</h5>
            </div>
            <div class="row center">
                <a href="/auth/register" class="btn-large waves-effect waves-light orange">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="mdi-editor-attach-money"></i></h2>
                        <h5 class="center">Free</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eius, exercitationem harum hic ipsa ipsum iste quia sunt tenetur voluptates.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="mdi-navigation-check"></i></h2>
                        <h5 class="center">Easy</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores beatae consectetur corporis dolores eum, inventore omnis quaerat veritatis vitae?</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="mdi-hardware-phonelink"></i></h2>
                        <h5 class="center">Accessible</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium eligendi eos et ex libero necessitatibus, nulla perspiciatis repellat velit!</p>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
    </div>
@endsection