<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbstractEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstract_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rate_work', 255);
            $table->string('include_evaluation', 255);
            $table->integer('registration_id');
            $table->integer('submission_id');
            $table->integer('referee_id');
            $table->integer('axis_id');
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
        Schema::dropIfExists('abstract_evaluations');
    }
}
