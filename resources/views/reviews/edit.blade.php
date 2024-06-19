@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Review</h1>
        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('reviews.form')
            <button type="submit" class="btn btn-primary">Update Review</button>
        </form>
    </div>
@endsection