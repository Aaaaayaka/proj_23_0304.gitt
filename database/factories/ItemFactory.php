<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Item;
use App\User; // usersテーブル
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id, // usersテーブルidからランダム
        'thumbnail' => 'test.png',
        'title' => $faker->realText(10), // 10文字のランダムテキスト
        'material' => $faker->realText(10), // 10文字のランダムテキスト
        'make' => $faker->realText(50), // 50文字のランダムテキスト
        'status' => $faker->randomElement([0, 1]) // 0か1のどちらか
        // realTextは最低10文字以上
    ];
});
