@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add New Screening</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('screenings.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="room_id" class="form-label">Room</label>
                        <select name="room_id" id="room_id" class="form-select">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="movie_id" class="form-label">Movie</label>
                        <select name="movie_id" id="movie_id" class="form-select">
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="screening_date" class="form-label">Screening Date</label>
                        <input type="date" name="screening_date" id="screening_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="time_slot" class="form-label">Time Slot</label>
                        <select name="time_slot" id="time_slot" class="form-select">
                            @foreach($time_slots as $key => $label)
                                <option value="{{ $key }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Screening</button>
                </form>
            </div>
        </div>
    </div>
@endsection