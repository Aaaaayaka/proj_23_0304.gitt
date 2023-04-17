<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function materials()
    {
        return $this->belongsToMany('App\Models\Material');
    }

    public function posts()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function notifications()
    {
        return $this->belongsTo('App\Models\Notification');
    }

    public function favorites()
    {
        return $this->belongsTo('App\Models\Favorite');
    }
}
