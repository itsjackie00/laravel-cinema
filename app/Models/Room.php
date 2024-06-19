<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'seats',
        'is_isense',
    ];

    protected $casts = [
        'is_isense' => 'boolean',
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_room');
    }
}
