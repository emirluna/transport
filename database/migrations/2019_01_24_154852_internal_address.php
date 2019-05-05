<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InternalAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internaladdress', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('EnterpriseId')->unsigned();
            //$table->foreign('EnterpriseId')->references('id')->on('Enterprises')->nullable();
            $table->string('Street', 150);
            $table->integer('Number');
            $table->string('Town', 150);
            $table->string('City', 150);
            $table->string('Country', 150);
            $table->integer('ZipCode');
            $table->smallInteger('Status');
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
        Schema::dropIfExists('internaladdress');
    }
}
