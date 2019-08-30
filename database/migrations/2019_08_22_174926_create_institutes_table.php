<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoria')->unsigned();
            $table->string('entidad');
            $table->string('claveInstitucion', 20);
            $table->text('nombreInstitucion');
            $table->bigInteger('peso')->unsigned();
            $table->foreign('categoria')->references('id')->on('categories');
            $table->foreign('entidad')->references('claveEntidad')->on('entities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
