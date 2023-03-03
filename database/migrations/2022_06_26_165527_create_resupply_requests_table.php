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
        Schema::create('resupply_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('employee_name');
            $table->date('request_date');
            $table->string('store_name');

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
        Schema::dropIfExists('resupply_requests');
    }
};
