

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHomePageSubMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text');
            $table->timestamps();
        });


        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text');
            $table->string('url');
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
        Schema::dropIfExists('about');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('links');
    }
}
