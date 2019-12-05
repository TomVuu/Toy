<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisputeLnksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DISPUTELNKS', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mainid');
            $table->unsignedBigInteger('secondid');
            $table->unsignedBigInteger('typeid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DISPUTELNKS');
    }
}
