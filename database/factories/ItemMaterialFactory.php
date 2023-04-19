<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\ItemMaterial;
use App\Item; // itemsテーブル
use App\Material; // materialsテーブル
use Faker\Generator as Faker;

$factory->define(ItemMaterial::class, function (Faker $faker) {
    return [
        'item_id' => Item::all()->random()->id, // itemsテーブルidからランダム
        'material_id' => Material::all()->random()->id, // materialsテーブルidからランダム
    ];
});
