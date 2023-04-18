<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Favorite;
use App\User; // usersテーブル
use App\Item; // itemsテーブル
use Faker\Generator as Faker;

$factory->define(Favorite::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id, // usersテーブルidからランダム
        'item_id' => Item::all()->random()->id, // itemsテーブルidからランダム
    ];
});
