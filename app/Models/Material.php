<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function Item()
    {
        return $this->belongsTo('App\Models\Item');
    }
}
