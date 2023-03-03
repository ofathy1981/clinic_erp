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
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name');
            $table->string('cid');
            $table->date('schedule_date');
            $table->time('schedule_time');
            $table->string('nurse');
            $table->string('room');
            $table->string('work');
            $table->string('doctor');
            $table->string('known_us_from');
            $table->string('sp_beuty');
            $table->float('duration');
            $table->string('case');
            $table->text('notes');
            $table->float('total+payment');
            $table->integer('total_number_of_services');
            $table->string('schedule_status');
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
        Schema::dropIfExists('schedules');
    }
};
