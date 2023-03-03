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
        Schema::create('s_offer_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('s_offer_id');
            $table->integer('item_price');
            $table->string('item_name');
            $table->integer('item_price');

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
        Schema::dropIfExists('s_offer_items');
    }
};
