<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePipelineApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipeline_applicant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pipeline_id');
            $table->unsignedBigInteger('position_id');
            $table->json('stage');
            $table->timestamps();

            // foreing keys
            $table->foreign('position_id')->references('id')->on('position');
            // foreing keys
            $table->foreign('pipeline_id')->references('id')->on('pipeline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pipeline_applicant');
    }
}
