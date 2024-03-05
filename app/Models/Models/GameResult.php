<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class GameResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_name',
        'random_number',
        'guessed_number',
        'result',
      
    ];

}
