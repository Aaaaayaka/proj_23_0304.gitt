<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function follows()
    {
        return $this->hasMany('App\Models\Follow');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function materials()
    {
        return $this->hasMany('App\Models\Material');
    }
}
