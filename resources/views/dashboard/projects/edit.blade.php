@extends('dashboard.master')

@section('content')
    <h2>Edit project</h2>
    <form method="post" action="/dashboard/projects/{{ $project->id }}/edit">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="put">
        <div class="input-field">
            <input type="text" name="title" id="title" value="{{ $project->title }}">
            <label for="title">Title</label>
        </div>
        <div class="input-field">
            <textarea class="materialize-textarea" name="description" id="description">{{ $project->description }}</textarea>
            <label for="description">Description</label>
        </div>
        <div class="input-field">
            <input type="text" name="price_range" id="price_range" value="{{ $project->price_range }}">
            <label for="price_range">Budget</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">
            Update
        </button>
    </form>
@endsection