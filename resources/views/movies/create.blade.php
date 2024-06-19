@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add New Movie</h1>
        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="cast">Cast</label>
                <input type="text" class="form-control" id="cast" name="cast">
            </div>
            <div class="form-group">
                <label for="duration">Duration (minutes)</label>
                <input type="number" class="form-control" id="duration" name="duration" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="form-group">
                <label for="trailer">Trailer URL</label>
                <input type="url" class="form-control" id="trailer" name="trailer">
            </div>
            <button type="submit" class="btn btn-primary">Add Movie</button>
        </form>
    </div>
@endsection