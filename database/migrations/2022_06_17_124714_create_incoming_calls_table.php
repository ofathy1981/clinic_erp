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
        Schema::create('incoming_calls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('agent_name');
            $table->string('name');
            $table->string('phone');
            $table->date('lastcalldate')->nullable();
            $table->date('recalldate')->nullable();
            $table->string('call_case');
            $table->text('notes')->nullable();
            $table->string('call_group')->nullable();
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
        Schema::dropIfExists('incoming_calls');
    }
};
