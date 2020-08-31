<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubbersheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubbersheets', function (Blueprint $table) {
            $table->id();
            $table->string('rsname');
            $table->string('rsprice');
            $table->string('rscategory');
            $table->string('rsintro');
            $table->string('rsdescription');
            $table->string('rswidth');
            $table->string('rslenght');
            $table->string('rsthickness');
            $table->string('rsreinforcement');
            $table->string('rscolor');
            $table->string('rsapplication');
            $table->string('rsgravity');
            $table->string('rshardness');
            $table->string('rstensile');
            $table->string('rselongation');
            $table->string('rscompression');
            $table->string('rstemp');
            $table->string('rsimg1');
            $table->string('rsimg2');
            $table->string('rsimg3');
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
        Schema::dropIfExists('rubbersheets');
    }
}
