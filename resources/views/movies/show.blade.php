@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">{{ $movie->title }}</h1>
        <div class="card">
            <div class="card-header">
                {{ $movie->title }} Details
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $movie->description }}</p>
                <p><strong>Cast:</strong> {{ $movie->cast }}</p>
                <p><strong>Duration:</strong> {{ $movie->duration }} minutes</p>
                <p><strong>Director:</strong> {{ $movie->director }}</p>
                <p><strong>Trailer:</strong> <a href="{{ $movie->trailer }}" target="_blank">Watch Trailer</a></p>
                @if ($movie->image)
                    <p><strong>Image:</strong></p>
                    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="img-fluid">
                @endif
                <a href="{{ route('movies.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning mt-3">Edit</a>
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>

        <h2 class="mt-5">Reviews</h2>
        @if ($movie->reviews->isEmpty())
            <p>No reviews yet.</p>
        @else
            @foreach($movie->reviews as $review)
                <div class="card mt-3">
                    <div class="card-body">
                        <p><strong>Rating:</strong> {{ $review->rating }} / 5</p>
                        <p><strong>Review:</strong> {{ $review->content }}</p>
                        <p><strong>Reviewer:</strong> {{ $review->user->name }}</p>
                        @if (Auth::id() == $review->user_id)
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif

        @auth
            <h2 class="mt-5">Add a Review</h2>
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                @include('reviews.form')
                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                <button type="submit" class="btn btn-primary mt-3">Add Review</button>
            </form>
        @endauth
    </div>
@endsection