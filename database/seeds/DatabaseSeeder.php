<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // * 外部キー制約の観点から親テーブルのSeederから実行されるようにする
        $this->call(UsersTableSeeder::class); //usersテーブルのSeederを実行
        $this->call(ItemsTableSeeder::class); //itemsテーブルのSeederを実行
        $this->call(PostsTableSeeder::class); //postsテーブルのSeederを実行
        $this->call(MaterialsTableSeeder::class); //materialsテーブルのSeederを実行
        $this->call(FavoritesTableSeeder::class); //favoritesテーブルのSeederを実行
        $this->call(FollowsTableSeeder::class); //followsテーブルのSeederを実行
        $this->call(NotificationsTableSeeder::class); //notificationsテーブルのSeederを実行
        $this->call(ItemMaterialTableSeeder::class); //item_materialテーブルのSeederを実行

        // * php artisan db:seedで
        // 'Target class [DatabaseSeeder(もしくはSeederファイル名)] does not exist.'
        // のエラーが発生する場合は以下を試してみて下さい
        // 1. 'composer dump-autoload'でComposerが管理するClassマップを再生成(composer.jsonに記載されている)
        // 2. 'php artisan migrate:reset'でtableを削除
        // 3. 'php artisan migrate'でtableを再生成
        // 4. 再度'php artisan db:seed'を実行
    }
}
