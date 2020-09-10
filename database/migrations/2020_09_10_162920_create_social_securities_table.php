<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_securities', function (Blueprint $table) {
            $table->id();
            $table->string('eps_name');
            $table->string('afiliation_type');
            $table->string('has_sisben');
            $table->string('score_sisben');
            $table->bigInteger('social_security_scheme_id')->unsigned()->nullable();
            $table->bigInteger('funcional_diversity_id')->unsigned()->nullable();
            $table->bigInteger('benficiary_id')->unsigned()->nullable();
            
            $table->foreign('social_security_scheme_id')->references('id')->on('social_security_schemes');
            $table->foreign('funcional_diversity_id')->references('id')->on('funcional_diversities');
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
        Schema::dropIfExists('social_securities');
    }
}
