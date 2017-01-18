<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('users', function (Blueprint $table) {
//            $table->foreign('coordinate_id')->references('id')->on('coordinates');
//            $table->foreign('group_id')->references('id')->on('group');
//            $table->foreign('role_id')->references('id')->on('role');
//        });
//        Schema::table('examen', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//        });
//        Schema::table('survey', function (Blueprint $table) {
//            $table->foreign('category_id')->references('id')->on('category');
//            $table->foreign('examen_id')->references('id')->on('examen');
//        });
//        Schema::table('question', function (Blueprint $table) {
//            $table->foreign('survey_id')->references('id')->on('survey');
//            $table->foreign('type_id')->references('id')->on('type');
//        });
//        Schema::table('choice', function (Blueprint $table) {
//            $table->foreign('question_id')->references('id')->on('question');
//
//        });
//        Schema::table('useranswer', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('question_id')->references('id')->on('question');
//            $table->foreign('examen_id')->references('id')->on('examen');
//            $table->foreign('survey_id')->references('id')->on('survey');
//            $table->foreign('choice_id')->references('id')->on('choice');
//        });
//        Schema::table('listecour', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('group_id')->references('id')->on('group');
//        });
//        Schema::table('cour', function (Blueprint $table) {
//            $table->foreign('listecour_id')->references('id')->on('listecour');
//        });
//        Schema::table('groupchat', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//        });
//
//        Schema::table('chat', function (Blueprint $table) {
//            $table->foreign('groupchat_id')->references('id')->on('groupchat');
//            $table->foreign('user_id')->references('id')->on('users');
//
//        });
//        Schema::table('notebook', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('group_id')->references('id')->on('group');
//        });
//        Schema::table('note', function (Blueprint $table) {
//            $table->foreign('notebook_id')->references('id')->on('notebook');
//        });
//
//        Schema::table('usersharenotebook', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('notebook_id')->references('id')->on('notebook');
//        });
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
