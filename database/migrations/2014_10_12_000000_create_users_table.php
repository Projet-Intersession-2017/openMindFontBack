<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('last_connect')->nullable();
            $table->boolean('spam')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('coordinate_id')->unsigned()->nullable();
            $table->integer('role_id')->unsigned()->nullable();
            $table->integer('group_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
