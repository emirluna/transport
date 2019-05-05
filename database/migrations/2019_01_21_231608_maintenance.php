<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintenance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('VehicleId');
            $table->integer('Responsible');
            $table->float('EstimatedTime');
            $table->dateTime('DateStartMaintenance');
            $table->dateTime('DateFinishMaintenance');
            $table->string('Comments', 250);
            $table->float('Amount');
            $table->smallInteger('Status');
            $table->string('Cause', 250);
            $table->smallInteger('Type');
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
        Schema::dropIfExists('maintenance');
    }
}
