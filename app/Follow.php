<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    // $fillable: レコード編集を許可してよいカラム(ホワイトリスト)
    // $guarded: レコード編集を許可しないカラム(ブラックリスト)
    protected $fillable = [
        'user_id',
        'follow_id',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'user_id',
        'follow_id',
    ];
}
