<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinorFiveYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minor_five_years', function (Blueprint $table) {
            $table->id();
            $table->double('birth_weight');
            $table->double('size_weight');
            $table->string('received_maternal_lactation', 250);
            $table->string('maternal_lactation_time', 250);
            $table->string('total_lactation', 250);
            $table->string('control_health_last_twelve_month', 250);
            $table->bigInteger('beneficiary_id')->unsigned()->nullable();
            
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');
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
        Schema::dropIfExists('minor_five_years');
    }
}
