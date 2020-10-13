<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationConditionHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_condition_housings', function (Blueprint $table) {
            $table->id();
            $table->string('state', 250)->nullable();
            $table->string('departament', 250)->nullable();
            $table->string('zone', 250)->nullable();
            $table->string('neighborhood', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('commune', 250)->nullable();
            $table->string('telephone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('cellphone_2')->nullable();
            $table->integer('socioeconomic_stratum')->nullable();
            $table->string('housing_type', 250)->nullable();
            $table->string('housing_holding', 250)->nullable();
            $table->string('housing_material', 250)->nullable();
            $table->string('material_soil', 250)->nullable();
            $table->string('service_water')->nullable();
            $table->string('service_light')->nullable();
            $table->string('service_sewerage')->nullable();
            $table->string('service_natural_gas')->nullable();
            $table->string('service_telephony')->nullable();
            $table->string('service_tv')->nullable();
            $table->string('service_internet')->nullable();
            $table->string('service_sanitary')->nullable();
            $table->string('quantity_rooms')->nullable();
            $table->string('number_rooms_where_sleep')->nullable();
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
        Schema::dropIfExists('location_condition_housings');
    }
}
