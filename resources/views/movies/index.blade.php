@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Movies</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">Add New Movie</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Director</th>
                        <th>Image</th>
                        <th>Trailer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->duration }} min</td>
                            <td>{{ $movie->director }}</td>
                            <td>
                                @if ($movie->image)
                                    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                @endif
                            </td>
                            <td>
                                @if ($movie->trailer)
                                    <a href="{{ $movie->trailer }}" target="_blank" class="btn btn-info btn-sm">Watch Trailer</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection