<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relation with tournaments
    public function tournament()
    {
        return $this->hasMany(Tournament::class);
    }

    // relations with profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    //relation with team
    public function team()
    {
        return $this->hasOne(Team::class);
    }
    //relation with result
    public function result()
    {
        return $this->hasMany(Result::class);
    }
    //relation with point
    public function point()
    {
        return $this->hasOne(Point::class);
    }
    //relation with booking
    public function booking()
    {
        return $this->belongsToMany(Booking::class);
    }
    //relation with ratings
    public function ratings()
    {
        return $this->hasMany(Booking::class);
    }
}
