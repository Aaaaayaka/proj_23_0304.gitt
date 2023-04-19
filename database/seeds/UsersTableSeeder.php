<?php

use Illuminate\Database\Seeder;
use App\User; //users
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テスト用に1件手動で作成
        User::create([
            'name' => 'テスト',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('testtest'),
            'remember_token' => Str::random(10),
        ]);

        factory(User::class, 9)->create(); // Faker(Factoryから)でダミーデータ9件作成
    }
}
