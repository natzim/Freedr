@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <h4>Create project</h4>
    </div>
    <div class="container">
        <form method="post" action="/dashboard/projects/create">
            {!! csrf_field() !!}
            <div class="input-field">
                <input type="text" name="title" id="title">
                <label for="title">Title</label>
            </div>
            <div class="input-field">
                <textarea class="materialize-textarea" name="description" id="description"></textarea>
                <label for="description">Description</label>
            </div>
            <div class="input-field">
                <input type="text" name="price_range" id="price_range">
                <label for="price_range">Budget</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Create
            </button>
        </form>
    </div>
@endsection