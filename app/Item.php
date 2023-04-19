<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function materials()
    {
        return $this->hasMany('App\Material');
    }
}
