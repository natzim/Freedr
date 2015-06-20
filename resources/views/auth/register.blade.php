@extends('auth.master')

@section('content')
    <h4>Register</h4>
    <form method="post" action="/auth/register">
        {!! csrf_field() !!}
        <div class="input-field">
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            <label for="name">Name</label>
        </div>
        <div class="input-field">
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            <label for="email">Email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" id="password">
            <label for="password">Password</label>
        </div>
        <div class="input-field">
            <input type="password" name="password_confirmation" id="password_confirmation">
            <label for="password_confirmation">Confirm password</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">
            Register
        </button>
        <br>
        <a href="/auth/login">Already have an account?</a>
    </form>
@endsection