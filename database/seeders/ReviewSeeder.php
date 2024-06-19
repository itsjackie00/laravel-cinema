<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Movie;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $movies = Movie::all();

        foreach ($movies as $movie) {
            foreach ($users as $user) {
                Review::create([
                    'user_id' => $user->id,
                    'movie_id' => $movie->id,
                    'content' => 'This is a sample review for ' . $movie->title,
                    'rating' => rand(1, 5),
                ]);
            }
        }
    }
}
