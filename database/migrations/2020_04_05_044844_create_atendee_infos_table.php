<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendee_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home_phone',11)->nullable();
            $table->string('work_phone',11)->nullable();
            $table->string('mobile_phone',11)->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('atendee_infos');
    }
}
