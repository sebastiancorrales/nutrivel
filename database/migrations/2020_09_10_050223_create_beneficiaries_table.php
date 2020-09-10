<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('first_name', 250);
            $table->string('second_name', 250)->nullable();
            $table->string('first_last_name', 250);
            $table->string('second_last_name', 250)->nullable();
            $table->string('document_type');
            $table->bigInteger('document_number')->nullable()->unique();
            $table->date('birthday');
            $table->string('country_of_birth', 250);
            $table->string('place_of_birth', 250);
            $table->string('gender', 250);
            $table->string('kinship_other_family', 250);
            $table->string('civil_status', 250);
            $table->string('displaced_population', 250);
            $table->string('victim_other_type_violence', 250);
            $table->string('which_violence', 250)->nullable();
            $table->date('registration_date');
            $table->date('admission_date')->nullable();
            $table->double('income_weight');
            $table->double('income_size');
            $table->string('nutritional_state_income', 250);
            $table->string('birth_term');
            $table->bigInteger('number_months_birth');
            $table->string('family_type', 250);
            $table->bigInteger('population_type_id')->unsigned()->nullable();
            $table->bigInteger('ethnic_id')->unsigned()->nullable();
            $table->bigInteger('age_group_id')->unsigned()->nullable();
            $table->string('authorize_handling_information');

            $table->foreign('population_type_id')->references('id')->on('type_populations');
            $table->foreign('ethnic_id')->references('id')->on('ethnicities');
            $table->foreign('age_group_id')->references('id')->on('age_groups');
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
        Schema::dropIfExists('beneficiaries');
    }
}
