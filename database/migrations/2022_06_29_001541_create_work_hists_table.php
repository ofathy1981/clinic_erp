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
        Schema::create('work_hists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->string('prev_job_1')->nullable();
            $table->string('prev_job_2')->nullable();
            $table->string('prev_job_3')->nullable();
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
        Schema::dropIfExists('work_hists');
    }
};
