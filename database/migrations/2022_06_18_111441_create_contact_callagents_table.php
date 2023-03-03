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
        Schema::create('contact_callagents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('agent_name');
            $table->string('contact_name')->nullable();
            $table->string('group_name')->nullable();
            $table->date('aassignment_date');


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
        Schema::dropIfExists('contact_callagents');
    }
};
