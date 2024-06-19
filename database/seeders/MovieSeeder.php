<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        Movie::create([
            'title' => 'Inception',
            'description' => 'A mind-bending thriller',
            'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
            'duration' => 148,
            'image' => 'path/to/image.jpg',
            'director' => 'Christopher Nolan',
            'trailer' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'description' => 'A hero emerges from the shadows',
            'cast' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
            'duration' => 152,
            'image' => 'path/to/image.jpg',
            'director' => 'Christopher Nolan',
            'trailer' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'description' => 'A journey beyond the stars',
            'cast' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
            'duration' => 169,
            'image' => 'path/to/image.jpg',
            'director' => 'Christopher Nolan',
            'trailer' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
        ]);

        Movie::create([
            'title' => 'The Matrix',
            'description' => 'Reality is an illusion',
            'cast' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
            'duration' => 136,
            'image' => 'path/to/image.jpg',
            'director' => 'The Wachowskis',
            'trailer' => 'https://www.youtube.com/watch?v=vKQi3bBA1y8',
        ]);

        Movie::create([
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'description' => 'A journey to destroy the One Ring',
            'cast' => 'Elijah Wood, Ian McKellen, Orlando Bloom',
            'duration' => 178,
            'image' => 'path/to/image.jpg',
            'director' => 'Peter Jackson',
            'trailer' => 'https://www.youtube.com/watch?v=V75dMMIW2B4',
        ]);

        Movie::create([
            'title' => 'Gladiator',
            'description' => 'A general turned gladiator seeks revenge',
            'cast' => 'Russell Crowe, Joaquin Phoenix, Connie Nielsen',
            'duration' => 155,
            'image' => 'path/to/image.jpg',
            'director' => 'Ridley Scott',
            'trailer' => 'https://www.youtube.com/watch?v=owK1qxDselE',
        ]);

        Movie::create([
            'title' => 'Avatar',
            'description' => 'A marine on an alien planet',
            'cast' => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
            'duration' => 162,
            'image' => 'path/to/image.jpg',
            'director' => 'James Cameron',
            'trailer' => 'https://www.youtube.com/watch?v=5PSNL1qE6VY',
        ]);

        Movie::create([
            'title' => 'The Avengers',
            'description' => 'Earth’s mightiest heroes must come together',
            'cast' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
            'duration' => 143,
            'image' => 'path/to/image.jpg',
            'director' => 'Joss Whedon',
            'trailer' => 'https://www.youtube.com/watch?v=eOrNdBpGMv8',
        ]);

        Movie::create([
            'title' => 'Titanic',
            'description' => 'A love story on the ill-fated ship',
            'cast' => 'Leonardo DiCaprio, Kate Winslet, Billy Zane',
            'duration' => 195,
            'image' => 'path/to/image.jpg',
            'director' => 'James Cameron',
            'trailer' => 'https://www.youtube.com/watch?v=2e-eXJ6HgkQ',
        ]);

        Movie::create([
            'title' => 'Jurassic Park',
            'description' => 'Dinosaurs brought back to life',
            'cast' => 'Sam Neill, Laura Dern, Jeff Goldblum',
            'duration' => 127,
            'image' => 'path/to/image.jpg',
            'director' => 'Steven Spielberg',
            'trailer' => 'https://www.youtube.com/watch?v=lc0UehYemQA',
        ]);
    }
}
