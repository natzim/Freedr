@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find</h4>
        </div>
    </div>
    <div class="container center">
        <a class="waves-effect waves-light btn btn-large" href="/dashboard/find/projects">Find projects</a>
        <p>or</p>
        <a class="waves-effect waves-light btn btn-large" href="/dashboard/find/freelancers">Find freelancers</a>
    </div>
@endsection