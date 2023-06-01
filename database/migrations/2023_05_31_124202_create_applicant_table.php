<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position_id');
            $table->string('name');
            $table->string('email');
            $table->unsignedBigInteger('phone_number');

            $table->string('address');
            $table->text('summary');
            $table->json('tags');
            $table->string('source');
            $table->json('work_history');
            $table->json('education');
            $table->string('curriculum_url');
            $table->timestamps();

             // foreing keys
             $table->foreign('position_id')->references('id')->on('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant');
    }
}
