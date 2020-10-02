<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('know_read_write');
            $table->string('educational_level');
            $table->string('study_currently');
            $table->string('course_study_currently');
            $table->string('study_day');
            $table->string('perform_some_course');
            $table->string('wich_course')->nullable();
            $table->bigInteger('beneficiary_id')->unsigned()->nullable();
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('education');
    }
}
