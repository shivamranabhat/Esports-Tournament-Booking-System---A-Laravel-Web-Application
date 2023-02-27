<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','logo','player_1','player_2','player_3','player_4','user_id'
    ];
    public function team()
    {
        return $this->belongsTo('App\Models\Booking','user_id');
    }

}
