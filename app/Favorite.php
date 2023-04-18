<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    // $fillable: レコード編集を許可してよいカラム(ホワイトリスト)
    // $guarded: レコード編集を許可しないカラム(ブラックリスト)
    protected $fillable = [
        'user_id',
        'item_id',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'user_id',
        'item_id',
    ];
}
