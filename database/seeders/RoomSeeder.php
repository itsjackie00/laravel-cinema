<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::create([
            'name' => 'Kubric (Blue Room)',
            'seats' => 100,
            'is_isense' => false,
        ]);

        Room::create([
            'name' => 'Spielberg (Green Room)',
            'seats' => 120,
            'is_isense' => true,
        ]);

        Room::create([
            'name' => 'Hitchcock (Yellow Room)',
            'seats' => 50,
            'is_isense' => false,
        ]);

        Room::create([
            'name' => 'Miyazaki (Red Room)',
            'seats' => 50,
            'is_isense' => false,
        ]);
    }
}
