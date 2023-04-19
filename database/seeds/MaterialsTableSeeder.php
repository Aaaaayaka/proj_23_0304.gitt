<?php

use Illuminate\Database\Seeder;
use App\Material; //materials

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Material::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
