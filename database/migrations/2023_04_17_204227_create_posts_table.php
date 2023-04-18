<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // usersテーブルのid(コメントしたユーザー(ログイン中ユーザー)に関するusersテーブルのidが入る)
            $table->unsignedBigInteger('user_id');
            // itemsテーブルのid(コメントした時に現在表示中のレシピに関するitemsテーブルのidが入る)
            $table->unsignedBigInteger('item_id');
            // コメント内容
            $table->string('post');
            // 投稿日時
            $table->timestamps();
            // -------------------------------------
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
        Schema::dropIfExists('posts');
    }
}
