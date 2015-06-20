@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Add portfolio item</h4>
        </div>
    </div>
    <div class="container">
        <form method="post" action="/dashboard/profile/{{ $profile->id }}/portfolio/add">
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
                <input type="text" name="image" id="image">
                <label for="image">Image</label>
            </div>
            <div class="input-field">
                <input type="text" name="link" id="link">
                <label for="link">Link</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Update
            </button>
        </form>
    </div>
@endsection