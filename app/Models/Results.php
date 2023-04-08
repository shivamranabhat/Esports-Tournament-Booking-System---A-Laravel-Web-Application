<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $fillable =[
        'tournament_id', 'team_id', 'kills', 'placement','user_id','match_no','total'
    ];


    //relation with team
    public function team(){
        return $this->belongsTo(Team::class);
    }
    //relation with tournament
    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
    //relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
