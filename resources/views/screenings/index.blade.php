@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Screenings</h1>
    <a href="{{ route('screenings.create') }}" class="btn btn-primary mb-4">Add New Screening</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Movie</th>
                <th>Room</th>
                <th>Screening Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($screenings as $screening)
                <tr>
                    <td>{{ $screening->movie->title }}</td>
                    <td>{{ $screening->room->name }}</td>
                    <td>{{ $screening->screening_date }} - {{ $screening->time_slot }}</td>
                    <td>
                        <a href="{{ route('screenings.show', $screening->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('screenings.edit', $screening->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('screenings.destroy', $screening->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
