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
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('nationality');
            $table->string('patient_type');
            $table->string('social_case');
            $table->string('mobile');
            $table->string('cid');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('tel');
            $table->string('address_area');
            $table->string('address');
            $table->string('blood_type');
            $table->string('smoking');
            $table->float('weight');
            $table->float('length');
            $table->string('known_us_from');
            $table->string('job');
            $table->string('work_address');
            $table->string('case');
            $table->string('has_allegric_to_medicine');
            $table->float('credit_balance');
            $table->float('debit_balance');

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
        Schema::dropIfExists('patients');
    }
};
