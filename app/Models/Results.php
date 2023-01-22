<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $fillable =[
        'tournament_id', 'user_id','match_number', 'kills', 'placement', 'total'
    ];
}
