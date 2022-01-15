<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('pets_lang');

           Schema::create('pets_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pets_id')->unsigned();
            $table->foreign('pets_id')->references('id')->on('pets');
            $table->string('name', 35);           
            $table->string('lang_code',5);
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
        Schema::dropIfExists('pets_lang');
    }
}
