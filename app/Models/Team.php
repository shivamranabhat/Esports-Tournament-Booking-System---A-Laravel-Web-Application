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

    //relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //relation with history
    public function history()
    {
        return $this->hasMany(History::class);
    }

}
