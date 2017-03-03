<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Typenews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typenews',function($table){
            $table->increments('idLT');
            $table->string('TenLT');
            $table->string('TenLT_KhongDau');           
            $table->integer('ThuTu');
            $table->integer('Activie');  
        });
        Schema::table('typenews',function($table){
            $table->integer('idTL')->unsigned(); 
            $table->foreign('idTL')->references('id')->on('groupnews');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('typenews');
    }
}
