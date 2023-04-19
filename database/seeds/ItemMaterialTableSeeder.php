<?php

use Illuminate\Database\Seeder;
use App\ItemMaterial; //item_material

class ItemMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ItemMaterial::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
