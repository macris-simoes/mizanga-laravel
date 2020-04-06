<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendeeConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendee_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('register_modality');
            $table->date('register_start_date');
            $table->date('register_end_date');
            $table->boolean('attach_receipt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendee_configs');
    }
}
