<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Street', 150);
            $table->integer('Number');
            $table->string('Town', 150);
            $table->string('City', 150);
            $table->string('State', 150);
            $table->string('Country', 150);
            $table->integer('ZipCode');
            $table->smallInteger('Status');
            $table->integer('User_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * mysqldump -u sammy -p transport users > users.sql

     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customeraddress');
    }
}
