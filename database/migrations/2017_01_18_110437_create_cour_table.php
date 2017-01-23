<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('pdf');
            $table->string('description');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('listecour_id')->unsigned();
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
