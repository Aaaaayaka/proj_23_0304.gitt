<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // $fillable: レコード編集を許可してよいカラム(ホワイトリスト)
    // $guarded: レコード編集を許可しないカラム(ブラックリスト)
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];
}
