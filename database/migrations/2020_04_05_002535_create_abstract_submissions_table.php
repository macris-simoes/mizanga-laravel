<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbstractSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstract_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('first_axis');
            $table->string('second_axis');
            $table->string('third_axis');
            $table->string('abstract_title');
            $table->text('abstract_body');
            $table->string('first_keyword');
            $table->string('second_keyword');
            $table->string('third_keyword');
            $table->string('author');
            $table->string('author_affiliation');
            $table->string('first_coauthor')->nullable();
            $table->string('first_coauthor_afiliation')->nullable();
            $table->string('second_coauthor')->nullable();
            $table->string('second_coauthor_afiliation')->nullable();
            $table->string('third_coauthor')->nullable();
            $table->string('third_coauthor_afiliation')->nullable();
            $table->string('fourth_coauthor')->nullable();
            $table->string('fourth_coauthor_afiliation')->nullable();
            $table->string('fifth__coauthor')->nullable();
            $table->string('fifth__coauthor_afiliation')->nullable();
            $table->string('sixth_coauthor')->nullable();
            $table->string('sixth_coauthor_afiliation')->nullable();
            $table->string('seventh_coauthor')->nullable();
            $table->string('seventh_coauthor_afiliation')->nullable();
            $table->string('eighth_coauthor')->nullable();
            $table->string('eighth_coauthor_afiliation')->nullable();
            $table->string('nineth_coauthor')->nullable();
            $table->string('nineth_coauthor_afiliation')->nullable();
            $table->string('tenth_coauthor')->nullable();
            $table->string('tenth_coauthor_afiliation')->nullable();
            $table->string('financial_support')->nullable();
            $table->integer('registration_id');
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
        Schema::dropIfExists('abstract_submissions');
    }
}
