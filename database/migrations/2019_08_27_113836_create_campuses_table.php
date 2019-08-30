<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombreCampus');
            $table->string('siglasCampus', 15);
            $table->string('claveCampus', 20);
            $table->point('ubicacion');
            $table->bigInteger('peso')->unsigned();
            $table->bigInteger('matricula')->unsigned();
            $table->bigInteger('municipio')->unsigned();
            $table->bigInteger('instituto')->unsigned();
            $table->foreign('matricula')->references('id')->on('enrollments');
            $table->foreign('municipio')->references('id')->on('municipalities');
            $table->foreign('instituto')->references('id')->on('institutes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campuses');
    }
}
