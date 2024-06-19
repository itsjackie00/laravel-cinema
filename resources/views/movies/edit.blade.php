@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Movie</h1>
        <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $movie->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="cast">Cast</label>
                <input type="text" class="form-control" id="cast" name="cast" value="{{ $movie->cast }}">
            </div>
            <div class="form-group">
                <label for="duration">Duration (minutes)</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ $movie->duration }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($movie->image)
                <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                @endif
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ $movie->director }}">
            </div>
            <div class="form-group">
                <label for="trailer">Trailer URL</label>
                <input type="url" class="form-control" id="trailer" name="trailer" value="{{ $movie->trailer }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Movie</button>
        </form>
    </div>
@endsection