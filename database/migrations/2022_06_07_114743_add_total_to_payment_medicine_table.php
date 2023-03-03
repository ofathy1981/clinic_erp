<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{          
      // $table->float('total')->virtualAs('medicine_quantity * unit_price')->nullable();

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_medicines', function (Blueprint $table) {
            //
            $table->float('total')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_medicine', function (Blueprint $table) {
            //
        });
    }
};
