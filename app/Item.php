<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'thumbnail', 'title', 'material', 'make', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
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
        return $this->belongsToMany('App\Material');
    }
}
