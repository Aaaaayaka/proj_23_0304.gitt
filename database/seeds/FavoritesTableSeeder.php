<?php

use Illuminate\Database\Seeder;
use App\Favorite; //favorites

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Favorite::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
