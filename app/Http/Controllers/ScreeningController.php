<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use App\Models\Room;
use App\Models\Movie;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    public function index()
    {
        $screenings = Screening::with(['room', 'movie'])->get();
        return view('screenings.index', compact('screenings'));
    }

    public function create()
    {
        $rooms = Room::all();
        $movies = Movie::all();
        $time_slots = ['17-19' => 'Pomeriggio', '19-21' => 'Sera', '21-23' => 'Notte']; // Define time slots
        return view('screenings.create', compact('rooms', 'movies', 'time_slots'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'movie_id' => 'required|exists:movies,id',
            'screening_date' => 'required|date', // Assicurati che questa riga sia presente
            'time_slot' => 'required|in:17-19,19-21,21-23', // Validate time slot
        ]);

        Screening::create($validatedData);

        return redirect()->route('screenings.index')
                         ->with('success', 'Screening created successfully.');
    }

    public function show(Screening $screening)
    {
        return view('screenings.show', compact('screening'));
    }

    public function edit(Screening $screening)
    {
        $rooms = Room::all();
        $movies = Movie::all();
        $time_slots = ['17-19' => 'Pomeriggio', '19-21' => 'Sera', '21-23' => 'Notte']; // Define time slots

        return view('screenings.edit', compact('screening', 'rooms', 'movies', 'time_slots'));
    }

    public function update(Request $request, Screening $screening)
    {
        $validatedData = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'movie_id' => 'required|exists:movies,id',
            'screening_date' => 'required|date', // Assicurati che questa riga sia presente
            'time_slot' => 'required|in:17-19,19-21,21-23', // Validate time slot
        ]);

        $screening->update($validatedData);

        return redirect()->route('screenings.index')
                         ->with('success', 'Screening updated successfully.');
    }

    public function destroy(Screening $screening)
    {
        $screening->delete();
        return redirect()->route('screenings.index')
                         ->with('success', 'Screening deleted successfully.');
    }
}
