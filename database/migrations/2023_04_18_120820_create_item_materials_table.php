<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_materials', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            // -------------------------------------
            // itemsテーブルのid
            $table->unsignedBigInteger('item_id');
            // materialsテーブルのid
            $table->unsignedBigInteger('material_id');
            // -------------------------------------
            $table->timestamps();
            // 外部キー制約
            // onDelete('cascade'): itemsのレコードが削除されるとこのテーブルの当該item_idレコードも削除される
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            // onDelete('cascade'): materialsのレコードが削除されるとこのテーブルの当該material_idレコードも削除される
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_materials');
    }
}
