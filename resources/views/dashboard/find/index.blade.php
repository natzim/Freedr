@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find</h4>
        </div>
    </div>
    <div class="container center valign-wrapper" style="height: 80vh;">
        <div class="valign" style="width: 100%;">
            <a class="waves-effect waves-light btn btn-large red" href="{{ route('dashboard.find.projects') }}">
                <i class="mdi-action-search left"></i> Find projects
            </a>

            <p>or</p>
            <a class="waves-effect waves-light btn btn-large red" href="{{ route('dashboard.find.freelancers') }}">
                <i class="mdi-action-search left"></i> Find freelancers
            </a>
        </div>
    </div>
@endsection