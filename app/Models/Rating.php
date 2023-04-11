<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable=[
        'rating','comment','comments_on','comments_by'
    ];

    //relation with user
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
