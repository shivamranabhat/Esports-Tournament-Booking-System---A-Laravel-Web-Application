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
    public function image() {
        return $this->belongsTo('App\Models\tournament_avatar', 'image_id');
    }
    public function game(){
        return $this->belongsTo('App\Models\Game','game_id');
    }

}
