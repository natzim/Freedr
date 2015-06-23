@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find projects</h4>
        </div>
    </div>
    <div class="container">
        @if (is_null($project))
            <p class="flow-text">Sorry, there are no more projects for you to view. Try again in a bit.</p>
        @else
        @include('partials.project', $project)
            <div class="center row">
                <div class="col s6">
                    <form method="post" action="{{ route('dashboard.find.projects.accept', $project) }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <button class="btn waves-effect waves-light green">
                            <i class="mdi-navigation-check"></i>
                        </button>
                    </form>
                </div>
                <div class="col s6">
                    <form method="post" action="{{ route('dashboard.find.projects.deny', $project) }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <a class="btn waves-effect waves-light red">
                            <i class="mdi-navigation-close"></i>
                        </a>
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection