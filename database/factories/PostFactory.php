<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Post;
use App\User; // usersテーブル
use App\Item; // itemsテーブル
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id, // usersテーブルidからランダム
        'item_id' => Item::all()->random()->id, // itemsテーブルidからランダム
        'post' => $faker->realText(30), // 30文字のランダムテキスト
    ];
});
