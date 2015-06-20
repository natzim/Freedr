@extends('auth.master')

@section('content')
    <h4>Login</h4>
    <form method="post" action="/auth/login">
        {!! csrf_field() !!}
        <div class="input-field">
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            <label for="email">Email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" id="password">
            <label for="password">Password</label>
        </div>
        <p>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </p>
        <button class="btn waves-effect waves-light" type="submit" name="action">
            Login
        </button>
        <br>
        <a href="/auth/register">Don't have an account yet?</a>
    </form>
@endsection