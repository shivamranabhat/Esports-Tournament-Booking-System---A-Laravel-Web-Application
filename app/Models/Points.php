<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;
    protected $fillable = [
        'kills_point','placement_point','user_id'
    ];

    //relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
