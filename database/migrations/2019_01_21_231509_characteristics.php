<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Characteristics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('Vehicleid');
            $table->String('brand', 100);
            $table->String('Model', 100);
            $table->String('Color', 100);
            $table->integer('N_Axis');
            $table->smallInteger('Type');
            $table->float('FuelCapacity');
            $table->float('WeightCapacity');
            $table->smallInteger('FuelTypr');
            $table->float('FuelPerformance');
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
        Schema::dropIfExists('characteristics');
    }
}
