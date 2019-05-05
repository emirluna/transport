<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Name', 200);
            $table->string('LastName', 200);
            $table->string('email')->unique();
            $table->bigInteger('Phone');
            $table->string('username', 100)->unique();
            $table->string('password', 250);
            $table->Integer('Enterprise_id')->unsinged();
            $table->smallinteger('Status');
            /*$table->unsignedInteger('roles_id');
            $table->foreign('roles_id')->references('id')->on('roles');*/
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}





