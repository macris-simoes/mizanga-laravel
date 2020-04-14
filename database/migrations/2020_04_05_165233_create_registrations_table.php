<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('register_modality');
            $table->string('file')->nullable();
            $table->char('cpf',11)->unique();
            $table->string('rg',14)->unique();
            $table->string('emissor');
            $table->string('name');
            $table->date('birth_date');
            $table->string('social_name');
            $table->string('institution')->nullable();
            $table->string('education_level');
            $table->string('grad_school');
            $table->string('profession');
            $table->string('filiation')->nullable();
            $table->string('job_title')->nullable();
            $table->string('expertise')->nullable();
            $table->string('location');
            $table->string('city');
            $table->string('uf');
            $table->string('country')->nullable();
            $table->string('home_phone',11)->nullable();
            $table->string('work_phone',11)->nullable();
            $table->string('mobile_phone',11)->nullable();
            $table->string('email')->unique();
            $table->boolean('accessibility');
            $table->text('accessibility_info')->nullable();
            $table->string('gender')->nullable();
            $table->string('color');
            $table->boolean('use_social_name');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('registrations');
    }
}
