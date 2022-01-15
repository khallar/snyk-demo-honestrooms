<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivesLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('lives_lang');
        Schema::create('lives_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lives_id')->unsigned();
            $table->foreign('lives_id')->references('id')->on('lives');
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
        Schema::dropIfExists('lives_lang');
    }
}
