<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Advertise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise',function($table){
            $table->increments('id');
            $table->string('advertisename');
            $table->string('image');           
            $table->integer('width');
            $table->integer('height');
            $table->string('link');
            $table->string('target');
            $table->string('position');
            $table->integer('click');
            $table->integer('ord');
            $table->integer('active');
            $table->string('money');        
            
        });
        Schema::table('advertise', function($table){
            $table->integer('groupnewsid')->unsigned(); 
            $table->foreign('groupnewsid')->references('id')->on('groupnews'); 
        });
         Schema::table('advertise', function($table){
            $table->integer('advertisedid')->unsigned(); 
            $table->foreign('advertisedid')->references('id')->on('advertisedid'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('advertise');
    }
}
