<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_quote', function (Blueprint $table) {
            $table->integer('character_id')->unsigned();
            $table->integer('quote_id')->unsigned();

            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('quote_id')->references('id')->on('quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('character_quote');
    }
}
