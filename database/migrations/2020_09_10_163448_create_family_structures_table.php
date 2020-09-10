<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_structures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kinship_family');
            $table->date('bithday');
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
        Schema::dropIfExists('family_structures');
    }
}
