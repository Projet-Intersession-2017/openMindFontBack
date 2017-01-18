<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('note');
        Schema::drop('usersharenotebook');
        Schema::drop('notebook');
        Schema::drop('chat');
        Schema::drop('groupchat');
        Schema::drop('cour');
        Schema::drop('listecour');
        Schema::drop('useranswer');
        Schema::drop('choice');
        Schema::drop('question');
        Schema::drop('type');
        Schema::drop('caterory');
        Schema::drop('survey');
        Schema::drop('examen');
        Schema::drop('users');
        Schema::drop('coordinates');
        Schema::drop('group');
        Schema::drop('roles');
        Schema::drop('password_resets');
    }
}
