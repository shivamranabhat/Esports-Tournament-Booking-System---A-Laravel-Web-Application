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
    public function team(){
        return $this->belongsTo('App\Models\Team','team_id');
    }
    public function tournament(){
        return $this->belongsTo('App\Models\Tournament','tournament_id');
    }
}
