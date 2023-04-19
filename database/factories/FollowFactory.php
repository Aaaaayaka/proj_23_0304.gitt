<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Follow;
use App\User; // usersテーブル
use Faker\Generator as Faker;

$factory->define(Follow::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id, // usersテーブルidからランダム
        'follow_id' => User::all()->random()->id, // usersテーブルidからランダム
    ];
});
