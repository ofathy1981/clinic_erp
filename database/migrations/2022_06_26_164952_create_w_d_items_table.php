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
        Schema::create('w_d_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('waste_damage_id');
            $table->string('item_name');
            $table->integer('item_quantity');
            $table->string('damage_reason');
            $table->string('barcode');
            $table->text('notes');
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
        Schema::dropIfExists('w_d_items');
    }
};
