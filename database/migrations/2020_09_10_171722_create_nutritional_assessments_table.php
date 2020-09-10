<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionalAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional_assessments', function (Blueprint $table) {
            $table->id();
            $table->date('valuation_date');
            $table->double('weight');
            $table->double('size');
            $table->string('nutritional_condition');
            $table->bigInteger('benficiary_id')->unsigned()->nullable();
            $table->foreign('benficiary_id')->references('id')->on('beneficiaries');
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
        Schema::dropIfExists('nutritional_assessments');
    }
}
