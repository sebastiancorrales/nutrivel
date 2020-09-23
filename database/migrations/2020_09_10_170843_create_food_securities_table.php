<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_securities', function (Blueprint $table) {
            $table->id();
            $table->string('where_get_water');
            $table->string('quantity_food_consume_day');
            $table->string('need_reduce_food_last_months');
            $table->string('cause')->nullable();
            $table->string('grains');
            $table->string('fruits');
            $table->string('vegetables');
            $table->string('dairy');
            $table->string('eggs');
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
        Schema::dropIfExists('food_securities');
    }
}
