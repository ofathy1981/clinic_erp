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
        Schema::create('outgoing_calls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('agent_name');
            $table->dateTime('call_date');
            $table->string('client_name');
            $table->string('client_phone');
            $table->date('lastcalldate')->nullable();
            $table->date('recalldate')->nullable();
            $table->string('call_case');
            $table->text('notes')->nullable();
            $table->string('call_group')->nullable();
            $table->string('Appointment_status');

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
        Schema::dropIfExists('outgoing_calls');
    }
};
