<?php

use Illuminate\Database\Seeder;
use App\Post; //posts

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
