<?php

use Illuminate\Database\Seeder;
use App\Notification; //notifications

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notification::class, 10)->create(); // Faker(Factoryから)でダミーデータ10件作成
    }
}
