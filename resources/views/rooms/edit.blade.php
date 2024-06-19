@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Room</h1>
        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $room->name }}" required>
            </div>
            <div class="form-group">
                <label for="seats">Seats</label>
                <input type="number" class="form-control" id="seats" name="seats" value="{{ $room->seats }}" required>
            </div>
            <div class="form-check mb-3">
                <input type="hidden" name="is_isense" value="0">
                <input type="checkbox" class="form-check-input" id="is_isense" name="is_isense" value="1" {{ $room->is_isense ? 'checked' : '' }}>
                <label class="form-check-label" for="is_isense">Is Isense</label>
            </div>
            <button type="submit" class="btn btn-primary">Update Room</button>
        </form>
    </div>
@endsection