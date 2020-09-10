<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_vaccines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('beneficiary_id')->unsigned()->nullable();
            $table->bigInteger('pending_vaccines')->unsigned()->nullable();

            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');
            $table->foreign('pending_vaccines')->references('id')->on('vaccinations');
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
        Schema::dropIfExists('beneficiary_vaccines');
    }
}
