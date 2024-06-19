@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add New Review</h1>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            @include('reviews.form')
            <input type="hidden" name="movie_id" value="{{ $movie_id }}">
            <button type="submit" class="btn btn-primary">Add Review</button>
        </form>
    </div>
@endsection