@extends('dashboard.master')

<?php
$categories = [
    'web',
    'design',
    'writing',
    'art',
    'law',
    'translation',
];
?>

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Edit profile</h4>
        </div>
    </div>
    <div class="container">
        <form method="post" action="{{ route('dashboard.profile.update') }}">
            {!! csrf_field() !!}
            <div class="input-field">
                <input type="text" name="title" id="title" value="{{ $profile->title or '' }}">
                <label for="title">Title</label>
            </div>
            <div class="input-field" style="z-index: 100;">
                <select name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ isset($profile->category) && $category === $profile->category ? 'selected' : '' }}>{{ ucfirst($category) }}</option>
                    @endforeach
                </select>
                <label for="category">Category</label>
            </div>
            <div class="input-field">
                <textarea class="materialize-textarea" name="description" id="description">{{ $profile->description or '' }}</textarea>
                <label for="description">Description</label>
            </div>
            <div class="input-field">
                <input type="text" name="hourly_rate" id="hourly_rate" value="{{ $profile->hourly_rate or '' }}">
                <label for="hourly_rate">Hourly rate</label>
            </div>
            <div class="switch">
                <label>
                    Private
                    <input type="checkbox" checked>
                    <span class="lever"></span>
                    Public
                </label>
            </div>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Update
            </button>
        </form>
    </div>
@endsection