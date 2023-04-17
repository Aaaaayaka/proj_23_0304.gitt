<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function follows()
    {
        return $this->hasMany('App\Models\Follow');
    }

    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
}
