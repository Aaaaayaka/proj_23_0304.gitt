<?php

use Illuminate\Database\Seeder;
use App\Item; //items

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Item::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
