<?php

use Illuminate\Database\Seeder;
use App\Follow; //follows

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Follow::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
