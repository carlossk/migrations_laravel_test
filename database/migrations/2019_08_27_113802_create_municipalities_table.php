<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('claveMunicipio', 10);
            $table->string('claveEntidadMunicipio', 20);
            $table->text('nombreMunicipio');
            $table->bigInteger('peso')->unsigned();
            $table->string('entidad');
            $table->bigInteger('region')->unsigned();
            $table->foreign('entidad')->references('claveEntidad')->on('entities');
            $table->foreign('region')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
