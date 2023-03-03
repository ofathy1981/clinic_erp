<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('item_name');
            $table->integer('inhand_q');
            $table->date('indate');
            $table->integer('checkpoint');
            $table->date('expiredate');
            $table->string('prefererd_sup');
            $table->float('sale_price');
            $table->text('description');
            $table->string('category');
            $table->string('barcode');
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
        Schema::dropIfExists('inventories');
    }
};
