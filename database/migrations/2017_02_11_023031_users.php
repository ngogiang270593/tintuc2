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
        Schema::create('user', function($table){
        $table->increments('id');
        $table->string('name');
        $table->string('email',250)->unique();
        $table->string('password', 60);
         $table->string('image',250);
        $table->rememberToken();
        $table->string('role')->default('user');
        //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
