<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('menus', function($table)
        {
            $table->increments('id');
            $table->string('type'); // About / Articles / Links 
            $table->string('title');
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('cards', function($table)
        {
            $table->increments('id');
            $table->string('title'); 
            $table->string('address');
            $table->string('region'); 
            $table->string('style');
            $table->string('type');
            $table->string('code');
            $table->string('country');
            $table->string('material');
            $table->string('size');
            $table->string('date');
            $table->string('from_date');
            $table->string('till_date');
            $table->longText('text');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('images', function($table)
        {
            $table->increments('id');
            $table->integer('card_id')->unsigned(); 
            $table->string('image');
            $table->string('title'); 
            $table->rememberToken();
            $table->timestamps();
        });


         Schema::table('images', function($table) {
               $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');;
           });


        Schema::create('references', function($table)
        {
            $table->increments('id');
            $table->integer('card_id')->unsigned();
            $table->string('link'); 
            $table->rememberToken();
            $table->timestamps();
        });

          Schema::table('references', function($table) {
               $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');;
           });




    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
        Schema::dropIfExists('cards');
        Schema::dropIfExists('images');
        Schema::dropIfExists('references');
    }
}


