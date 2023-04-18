<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // usersテーブルのid(ログインユーザーのidが入る)
            $table->unsignedBigInteger('user_id');
            // usersテーブルのid(ログインユーザーに対してアクションをしたユーザーのidが入る)
            $table->unsignedBigInteger('serve_id');
            // itemsテーブルのid(アクションをした対象のitemsテーブルのidが入る)
            $table->unsignedBigInteger('item_id');
            // 通知の種類(1: お気に入り登録 / 2: コメント / 3: フォロー)
            $table->integer('type');
            // 通知確認フラグ(0: 未確認 / 1: 確認済)
            $table->integer('status');
            // -------------------------------------
            $table->timestamps();
            // 外部キー制約
            // onDelete('cascade'): usersのレコードが削除されるとこのテーブルの当該user_idレコードも削除される
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // onDelete('cascade'): usersのレコードが削除されるとこのテーブルの当該serve_idレコードも削除される
            $table->foreign('serve_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('notifications');
    }
}
