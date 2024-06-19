<?php
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'content' => 'required',
            'rating' => 'required|integer|min:0|max:5',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'movie_id' => $request->movie_id,
            'content' => $request->content,
            'rating' => $request->rating,


        ]);

        return redirect()->route('movies.show', $request->movie_id)
                         ->with('success', 'Review added successfully.');
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function index()
    {
        $reviews = Review::with('movie', 'user')->get();
        return view('reviews.index', compact('reviews'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'content' => 'required',
            'rating' => 'required|integer|min:0|max:5',
        ]);

        $review->update($request->all());

        return redirect()->route('movies.show', $review->movie_id)
                         ->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('movies.show', $review->movie_id)
                         ->with('success', 'Review deleted successfully.');
    }
}