<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionalInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutional_informacions', function (Blueprint $table) {
            $table->id();
            $table->string('home_visit_required');
            $table->string('solidarity_quota_exoneration');
            $table->string('family_context');
            $table->string('title_who_performs_characterization');
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
        Schema::dropIfExists('institutional_informacions');
    }
}
