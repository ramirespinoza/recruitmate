<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScorecardValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorecard_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scorecard_id');
            $table->unsignedBigInteger('applicant_id');
            $table->json('values');
            $table->timestamps();

            // foreing keys
            $table->foreign('scorecard_id')->references('id')->on('scorecard');
            $table->foreign('applicant_id')->references('id')->on('applicant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scorecard_values');
    }
}
