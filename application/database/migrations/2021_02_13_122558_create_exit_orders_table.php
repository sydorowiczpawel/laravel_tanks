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
            $table->double('km_start');
            $table->double('km_end')->nullable();
            $table->double('geh_start');
            $table->double('geh_end')->nullable();
            $table->double('leh_start');
            $table->double('leh_end')->nullable();
            $table->integer('heater')->nullable();
            $table->integer('pkt')->nullable();
            $table->integer('nswt')->nullable();
            $table->integer('armata')->nullable();
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
