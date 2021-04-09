<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExitOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exit_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pass_number');
            $table->foreign('pass_number')->references('pass_number')->on('users');
            $table->string('tank_number');
            $table->foreign('tank_number')->references('tank_number')->on('tanks');
            $table->string('series')->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('km_counter_start');
            $table->string('km_counter_end')->nullable();
            $table->string('geh_start');
            $table->string('geh_end')->nullable();
            $table->string('leh_start');
            $table->string('leh_end')->nullable();
            $table->integer('heater_min')->nullable();
            $table->integer('PKT')->nullable();
            $table->integer('NSWT')->nullable();
            $table->integer('2A46')->nullable();
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
        Schema::dropIfExists('exit_orders');
    }
}
