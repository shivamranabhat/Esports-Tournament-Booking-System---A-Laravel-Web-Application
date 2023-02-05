<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $fillable =[
        'tournament_id', 'team_id', 'kills', 'placement', 'total'
    ];
}
