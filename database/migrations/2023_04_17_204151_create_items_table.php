<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // usersテーブルのid(新規投稿したときに現在ログインしているusersテーブルのidが入る)
            $table->unsignedBigInteger('user_id');
            // レシピ画像
            $table->string('thumbnail');
            // レシピタイトル
            $table->string('title');
            // 材料説明
            $table->string('material');
            // 作り方説明
            $table->string('make');
            // 下書き/投稿済フラグ(0: 下書き / 1: 投稿済)
            $table->integer('status');
            // 投稿日時/更新日時
            $table->timestamps();
            // -------------------------------------
            // 外部キー制約
            // onDelete('cascade'): usersのレコードが削除されるとこのテーブルの当該user_idレコードも削除される
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
