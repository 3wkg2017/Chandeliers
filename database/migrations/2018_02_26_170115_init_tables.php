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
            $table->string('card_id'); 
            $table->string('image');
            $table->string('title'); 
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('references', function($table)
        {
            $table->increments('id');
            $table->string('card_id'); 
            $table->string('link'); 
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
        Schema::dropIfExists('menus');
        Schema::dropIfExists('cards');
        Schema::dropIfExists('images');
        Schema::dropIfExists('references');
    }
}
