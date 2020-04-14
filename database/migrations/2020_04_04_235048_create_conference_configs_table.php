<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferenceConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_conference',255);
            $table->string('promoting_entity',255);
            $table->string('primary_email',255);
            $table->date('event_start_date');
            $table->date('event_end_date');
            $table->longText('how_to_subscribe');
            $table->longText('referee_instructions');
            $table->integer('admin_id')->unsigned();
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
        Schema::dropIfExists('conference_configs');
    }
}
