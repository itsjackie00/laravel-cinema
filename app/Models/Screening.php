<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'movie_id',
        'screening_date',
        'time_slot',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function getTicketPriceAttribute()
    {
        $basePrice = $this->room->seats > 100 ? 10 : 8;
        if ($this->room->is_isense) {
            $basePrice += 3;
        }
        return $basePrice;
    }
}