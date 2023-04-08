<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'tournament_id','team_id','player_name','kills','match_no'
    ];

    //relation with tournament
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    //relation with team
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
