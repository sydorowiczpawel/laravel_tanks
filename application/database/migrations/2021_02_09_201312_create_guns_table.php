<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calibre');
            $table->string('name');
            $table->string('number');
            $table->string('pass_number');
            $table->foreign('pass_number')->references('pass_number')->on('users');
            $table->string('tank_number');
            $table->foreign('tank_number')->references('tank_number')->on('tanks');
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
        Schema::dropIfExists('guns');
    }
}
