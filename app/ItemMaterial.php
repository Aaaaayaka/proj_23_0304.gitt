<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemMaterial extends Model
{
    // $fillable: レコード編集を許可してよいカラム(ホワイトリスト)
    // $guarded: レコード編集を許可しないカラム(ブラックリスト)
    protected $fillable = [
        'item_id',
        'material_id',
        'created_at',
        'updated_at',
    ];
}
