<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // usersテーブルのid(ログインユーザーのidが入る)
            $table->unsignedBigInteger('user_id');
            // usersテーブルのid(フォローした相手のidが入る)
            $table->unsignedBigInteger('follow_id');
            // -------------------------------------
            $table->timestamps();
            // 外部キー制約
            // onDelete('cascade'): usersのレコードが削除されるとこのテーブルの当該user_idレコードも削除される
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // onDelete('cascade'): usersのレコードが削除されるとこのテーブルの当該follow_idレコードも削除される
            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
