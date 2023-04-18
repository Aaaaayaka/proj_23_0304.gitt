<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function materials()
    {
        return $this->belongsToMany('App\Material');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function notification()
    {
        return $this->belongsTo('App\Notification');
    }

    public function favorite()
    {
        return $this->belongsTo('App\Favorite');
    }
}
