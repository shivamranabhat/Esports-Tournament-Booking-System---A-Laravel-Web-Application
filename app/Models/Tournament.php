<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'type',
        'fees',
        'closing_time',
        'team_size',
        'prize_pool',
        'first_prize',
        'second_prize',
        'third_prize',
        'rules',
        'image_id',
        'game_id',
        'user_id'
    ];
    // public function image() {
    //     return $this->belongsTo('App\Models\tournament_avatar', 'image_id');
    // }
    // public function game(){
    //     return $this->belongsTo('App\Models\Game','game_id');
    // }
    // public function team(){
    //     return $this->belongsTo('App\Models\Team','user_id');
    // }
    // public function bookings()
    // {
    //     return $this->hasMany(Booking::class, 'tournament_id', 'id');
    // }

    //relation with avatar
    public function image()
    {
        return $this->belongsTo(tournament_avatar::class);
    }

    //relation with game
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    //relation with result
    public function result()
    {
        return $this->hasMany(Result::class);
    }
    //relation with history
    public function history()
    {
        return $this->hasMany(History::class);
    }
    //relation with bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
