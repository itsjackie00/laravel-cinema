@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Room Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $room->name }}
            </div>
            <div class="card-body">
                <p><strong>Seats:</strong> {{ $room->seats }}</p>
                <p><strong>Is Isense:</strong> {{ $room->is_isense ? 'Yes' : 'No' }}</p>
                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection