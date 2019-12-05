<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDueprcssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DUEPRCSSES', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('casenum');
            $table->string('status'); //open and close
            $table->string('instigator')->nullable();
            $table->string('decision')->nullable();
            $table->string('hasdecisn')->nullable(); //has decision
            $table->boolean('signed')->nullable();
            $table->boolean('expedited')->nullable();
            $table->boolean('ressession')->nullable(); // resolution session
            $table->date('resolutndt')->nullable(); // resolution date
            $table->string('hrngdt')->nullable(); //hearing date
            $table->time('hrngtime')->nullable(); //hearing time
            $table->string('hrglocst1')->nullable(); //hearing location street 1
            $table->string('hrglocst2')->nullable(); //hearing location street 2
            $table->string('hrgloccity')->nullable(); //hearing location city
            $table->string('hrgloczip')->nullable(); //hearing location zipcode
            $table->string('hrgstate')->nullable(); //hearing location state
            $table->boolean('extended')->nullable();
            $table->date('extendtodt')->nullable(); //extended to date
            $table->boolean('iswdrawn')->nullable(); // is withdrawn
            $table->date('wdrawndt')->nullable(); //withdrawn date
            $table->date('decisiondt')->nullable(); //decision date
            $table->date('ordcompldt')->nullable(); //order completed date
            $table->date('ordduedt')->nullable(); //order due date
            $table->string('decfor')->nullable();
            $table->boolean('hasflwup')->nullable(); //has followed up letter
            $table->boolean('hasclltr')->nullable(); //has closed letter
            $table->date('clltrdt')->nullable(); //close letter date
            $table->date('appealdt')->nullable(); //appeal date
            $table->boolean('hasappeal')->nullable(); // has appeal date
            $table->boolean('tscrontime')->nullable(); // transcript on time
            $table->date('tscrtduedt')->nullable(); //transcript due date
            $table->float('totalcost')->nullable();
            $table->unsignedBigInteger('countyid')->nullable();
            $table->unsignedBigInteger('stdntid')->nullable();
            $table->unsignedBigInteger('prntattyid')->nullable(); //parent attorney id
            $table->unsignedBigInteger('hrngoffcer')->nullable(); //hearing officer attorney id
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
        Schema::dropIfExists('DUEPRCSSES');
    }
}
