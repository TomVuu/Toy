<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COMPLAINTS', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('casenumber')->unique();
            $table->date('daterecevd')->nullable(); //date received
            $table->longText('summary')->nullable();
            $table->longText('form')->nullable(); //complaint form
            $table->string('status');
            $table->string('allegation')->nullable();
            $table->string('dpcasenum')->nullable();
            $table->string('medcasenum')->nullable(); //mediation case number
            $table->date('xtndtodt')->nullable(); //extend to date
            $table->boolean('extended')->nullable();
            $table->boolean('expedited')->nullable();
            $table->boolean('isValid')->nullable();
            $table->unsignedBigInteger('countyid')->nullable();
            $table->unsignedBigInteger('stdntid')->nullable(); //student id
            $table->unsignedBigInteger('wdrawnid')->nullable();
            $table->unsignedBigInteger('invstgtrid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('COMPLAINTS');
    }
}