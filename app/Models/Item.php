<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
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
