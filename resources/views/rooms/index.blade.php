@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Rooms</h1>
        <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Add New Room</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Seats</th>
                        <th>Is Isense</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->seats }}</td>
                            <td>{{ $room->is_isense ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
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