<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefereeConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referee_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('appraiser_cpf', 11)->unique();
            $table->string('appraiser_name', 255);
            $table->string('appraiser_email', 255);
            $table->boolean('axis_01','confirmed');
            $table->boolean('axis_02','confirmed');
            $table->boolean('axis_03','confirmed');
            $table->boolean('axis_04','confirmed');
            $table->boolean('acceptance_letter','confirmed');
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
        Schema::dropIfExists('referee_configs');
    }
}
