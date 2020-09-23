<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_programs', function (Blueprint $table) {
            $table->id();
            $table->date('admission_date');
            $table->bigInteger('program_id')->unsigned()->nullable();
            $table->bigInteger('beneficiary_id')->unsigned()->nullable();
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');
            $table->foreign('program_id')->references('id')->on('programs');
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
        Schema::dropIfExists('beneficiary_programs');
    }
}
