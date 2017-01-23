<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnwersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useranswer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('answer_value');
            $table->integer('note_response');
            $table->integer('note_survey');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('examen_id')->unsigned();
            $table->integer('survey_id')->unsigned();
            $table->integer('choice_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
