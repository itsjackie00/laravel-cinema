@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Screening Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Room:</strong> {{ $screening->room->name }}</p>
                <p><strong>Movie:</strong> {{ $screening->movie->title }}</p>
                <p><strong>Screening Time:</strong> {{ $screening->screening_time }}</p>
                <p><strong>Ticket Price:</strong> €{{ $screening->ticket_price }}</p>
                <a href="{{ route('screenings.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                <a href="{{ route('screenings.edit', $screening->id) }}" class="btn btn-warning mt-3">Edit</a>
                <form action="{{ route('screenings.destroy', $screening->id) }}" method="POST" class="d-inline mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection