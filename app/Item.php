<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // $fillable: レコード編集を許可してよいカラム(ホワイトリスト)
    // $guarded: レコード編集を許可しないカラム(ブラックリスト)
    protected $fillable = [
        'user_id',
        'thumbnail',
        'title',
        'material',
        'make',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'user_id',
    ];

    // 日付のフォーマットを変えるformat関数を使えるようにする
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
