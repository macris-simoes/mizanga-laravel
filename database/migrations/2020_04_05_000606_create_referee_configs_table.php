<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


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
            $table->increments('id');
            $table->string('appraiser_cpf', 11)->unique();
            $table->string('appraiser_name');
            $table->string('appraiser_email');
            $table->integer('user_id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->timestamps();
        });

        $prefix = DB::getTablePrefix();
        DB::update("ALTER TABLE ".$prefix."referee_configs AUTO_INCREMENT = 45000;");
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
