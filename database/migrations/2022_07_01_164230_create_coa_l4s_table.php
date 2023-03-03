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
        Schema::create('coa_l4s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level3_id');
            $table->integer('user_id');
            $table->string('acc_code');
            $table->string('acc_name_en');
            $table->string('acc_name_ar');
            $table->string('parent_account_code');
            $table->string('parent_account_name');
            $table->string('acc_type');
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
        Schema::dropIfExists('coa_l4s');
    }
};
