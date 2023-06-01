<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('team_id');
            $table->enum('type', ['easy', 'hard']);
            $table->json('location');
            $table->string('departament');
            //$table->unsignedBigInteger('requisition_id');
            $table->enum('category', ['easy', 'hard']);
            $table->enum('experience', ['easy', 'hard']);
            $table->enum('education', ['easy', 'hard']);
            $table->json('custom_attribute');
            $table->unsignedBigInteger('scorecard_id');
            $table->unsignedBigInteger('pipeline_id');
            $table->unsignedBigInteger('questionnaire_id');
            $table->timestamps();

             // foreing keys
             $table->foreign('company_id')->references('id')->on('company');
             $table->foreign('team_id')->references('id')->on('team');
             //$table->foreign('requisition_id')->references('id')->on('requisition');
             $table->foreign('scorecard_id')->references('id')->on('scorecard');
             $table->foreign('pipeline_id')->references('id')->on('pipeline');
             $table->foreign('questionnaire_id')->references('id')->on('questionnaire');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position');
    }
}
