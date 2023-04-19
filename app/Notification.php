<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    // $fillable: レコード編集を許可してよいカラム(ホワイトリスト)
    // $guarded: レコード編集を許可しないカラム(ブラックリスト)
    protected $fillable = [
        'user_id',
        'serve_id',
        'item_id',
        'type',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'user_id',
        'serve_id',
        'item_id',
    ];
}
