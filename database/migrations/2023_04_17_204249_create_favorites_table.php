<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // usersテーブルのid(お気に入り登録した時にログインしているusersテーブルのidが入る)
            $table->unsignedBigInteger('user_id');
            // itemsテーブルのid(お気に入り登録した時に現在表示中のレシピに関するitemsテーブルのidが入る)
            $table->unsignedBigInteger('item_id');
            // -------------------------------------
            $table->timestamps();
            // 外部キー制約
            // onDelete('cascade'): usersのレコードが削除されるとこのテーブルの当該user_idレコードも削除される
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // onDelete('cascade'): itemsのレコードが削除されるとこのテーブルの当該item_idレコードも削除される
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
