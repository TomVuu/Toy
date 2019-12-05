<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STUDENTS', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->date('stdntdob')->nullable();
            $table->string('phone')->nullable();
            $table->string('street1')->nullable();
            $table->string('street2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->unsignedInteger('zipcode')->nullable();
            $table->unsignedInteger('grade')->nullable();
            $table->unsignedInteger('schlnum')->nullable();
            $table->unsignedBigInteger('dpid')->nullable();; //due process id
            $table->unsignedBigInteger('schlid')->nullable(); //school id
         //   $table->auditable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('STUDENTS');
        Schema::enableForeignKeyConstraints();
    }
}