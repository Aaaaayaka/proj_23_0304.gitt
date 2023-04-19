<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Notification;
use App\User; // usersテーブル
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id, // usersテーブルidからランダム
        'serve_id' => User::all()->random()->id, // usersテーブルidからランダム
        'item_id' => $faker->numberBetween(1, 10), // itemsテーブルid: 1~10
        'type' => $faker->randomElement([1, 2, 3]), // 1~3のいずれか
        'status' => $faker->randomElement([0, 1]), // 0か1のどちらか
    ];
});
