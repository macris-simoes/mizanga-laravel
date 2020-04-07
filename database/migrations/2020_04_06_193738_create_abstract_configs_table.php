<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbstractConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstract_configs', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('work_modality');
            $table->date('work_start_date');
            $table->date('work_end_date');
            $table->string('coauthor_quantity');
            $table->integer('queue');
            $table->integer('abstract_title_min_char');
            $table->integer('abstract_title_max_char');
            $table->integer('abstract_min_char');
            $table->integer('abstract_max_char');
            $table->text('author_instructions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abstract_configs');
    }
}
