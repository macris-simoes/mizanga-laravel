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
            $table->increments('id');
            $table->string('register_modality');
            $table->date('register_start_date');
            $table->date('register_end_date');
            $table->boolean('attach_receipt');
            $table->integer('admin_id')->unsigned();
            $table->decimal('register_fee', 8, 2);
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
        Schema::dropIfExists('attendee_configs');
    }
}
