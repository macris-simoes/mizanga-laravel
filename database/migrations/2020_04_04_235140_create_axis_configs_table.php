<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAxisConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('axis_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('axis',255);
            $table->timestamps();
        });

        $prefix = DB::getTablePrefix();
        DB::update("ALTER TABLE ".$prefix."axis_configs AUTO_INCREMENT = 1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('axis_configs');
    }
}
