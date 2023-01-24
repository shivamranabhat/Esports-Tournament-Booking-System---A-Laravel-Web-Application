<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable=[
        'full_name','phone','email','image','level','uid','user_id','game_id'
    ];
    /* Get the user that owns the Profile
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function game()
    {
        return $this->belongsTo('App\Models\Game', 'game_id');
    }
}
