@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find freelancers</h4>
        </div>
    </div>
    <div class="container">
        @if (is_null($profile))
            <p class="flow-text">Sorry, there are no more freelancers in the queue. Try again in a bit.</p>
        @else
            @include('partials.profile', $profile)
            <div class="center row">
                <div class="col s6">
                    <form method="post" action="{{ route('dashboard.find.freelancers.accept', $profile) }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <button class="btn waves-effect waves-light green">
                            <i class="mdi-navigation-check"></i>
                        </button>
                    </form>
                </div>
                <div class="col s6">
                    <form method="post" action="{{ route('dashboard.find.freelancers.deny', $profile) }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <button class="btn waves-effect waves-light red">
                            <i class="mdi-navigation-close"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection