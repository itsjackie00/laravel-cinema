@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Reviews</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Movie</th>
                        <th>User</th>
                        <th>Content</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reviews as $review)
                        <tr>
                            <td>{{ $review->movie->title }}</td>
                            <td>{{ $review->user->name }}</td>
                            <td>{{ $review->content }}</td>
                            <td>{{ $review->rating }} / 5</td>
                            <td>
                                <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
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