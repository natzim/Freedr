@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>New review</h4>
        </div>
    </div>
    <div class="container">
        <form method="post" action="{{ route('dashboard.matches.reviews.store', $freelancer) }}">
            {!! csrf_field() !!}
            <div class="input-field" style="z-index: 100;">
                <select name="rating" id="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="rating">Rating</label>
            </div>
            <div class="input-field">
                <textarea class="materialize-textarea" name="description" id="description"></textarea>
                <label for="description">Description</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Submit
            </button>
        </form>
    </div>
@endsection