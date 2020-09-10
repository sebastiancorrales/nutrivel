<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_programs', function (Blueprint $table) {
            $table->id();
            $table->string('enrolled_another_social_program');
            $table->string('what_program')->nullable();
            $table->string('some_subsidy_type');
            $table->string('what_subsidy_type');
            $table->string('income_received')->nullable();
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
        Schema::dropIfExists('social_programs');
    }
}
