<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // アカウント名: マイページに表示される名前
            $table->string('name');
            // 登録メールアドレス: 同じメールアドレスは登録できないようにする
            $table->string('email');
            // [必須]パスワード: 英数字8文字以上
            $table->string('password');
            // 自己紹介文
            $table->string('bio')->default('よろしくお願いいたします。')->nullable();
            // プロフィールアイコン: 画像のファイルパスのみ
            $table->string('image')->default('default.png');
            // -------------------------------------
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
