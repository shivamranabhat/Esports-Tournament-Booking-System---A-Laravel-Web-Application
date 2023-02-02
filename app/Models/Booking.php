<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'tournament_id','user_id','team_id','payment_id'
    ];
    public function team(){
        return $this->belongsTo(Team::class,'team_id','id');
    }
}
