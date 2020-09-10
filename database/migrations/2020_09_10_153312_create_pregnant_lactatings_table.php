<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregnantLactatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnant_lactatings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gestacional_age');
            $table->string('clinical_antecedent')->nullable();
            $table->string('pathological_family_antecedent')->nullable();
            $table->string('psychoactive_substance_use_antecedent')->nullable();
            $table->string('use_substance_psychoactive');
            $table->string('use_cigarette');
            $table->bigInteger('beneficiary_id')->unsigned()->nullable();
            $table->bigInteger('planning_method_id')->unsigned()->nullable();

            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');
            $table->foreign('planning_method_id')->references('id')->on('planning_methods');
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
        Schema::dropIfExists('pregnant_lactatings');
    }
}
