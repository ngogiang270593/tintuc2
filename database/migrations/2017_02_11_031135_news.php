<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news',function($table){
            $table->increments('id');
            $table->string('titelname');
            $table->string('image');
            $table->text('description');
            $table->text('content');
            $table->integer('activie');            
            $table->float('views');
            $table->string('upnews');
        });
        Schema::table('news', function($table){
            $table->integer('idLT')->unsigned(); 
            $table->foreign('idLT')->references('id')->on('typenews'); 
        });
        Schema::table('news', function($table){
            $table->integer('groupnewsid')->unsigned(); 
            $table->foreign('groupnewsid')->references('id')->on('groupnews'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}
