<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostgraduateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postgraduate_enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('c1')->unsigned()->nullable();
            $table->bigInteger('c2')->unsigned()->nullable();
            $table->bigInteger('c3')->unsigned()->nullable();
            $table->bigInteger('c4')->unsigned()->nullable();
            $table->bigInteger('c5')->unsigned()->nullable();
            $table->bigInteger('c6')->unsigned()->nullable();
            $table->bigInteger('c7')->unsigned()->nullable();
            $table->bigInteger('c8')->unsigned()->nullable();
            $table->bigInteger('c9')->unsigned()->nullable();
            $table->bigInteger('c10')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postgraduate_enrollments');
    }
}
