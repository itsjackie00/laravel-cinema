@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add New Room</h1>
        <form action="{{ route('rooms.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="seats">Seats</label>
                <input type="number" class="form-control" id="seats" name="seats" required>
            </div>
            <div class="form-check mb-3">
                <input type="hidden" name="is_isense" value="0">
                <input type="checkbox" class="form-check-input" id="is_isense" name="is_isense" value="1">
                <label class="form-check-label" for="is_isense">Is Isense</label>
            </div>
            <button type="submit" class="btn btn-primary">Add Room</button>
        </form>
    </div>
@endsection