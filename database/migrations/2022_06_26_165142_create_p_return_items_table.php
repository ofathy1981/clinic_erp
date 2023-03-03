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
        Schema::create('p_return_items', function (Blueprint $table) {
            $table->id();
            $table->integer('internal_deliver_id');
            $table->string('item_name');
            $table->integer('item_quantity');
            $table->string('item_status');
            $table->string('return_reason');
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
        Schema::dropIfExists('p_return_items');
    }
};
