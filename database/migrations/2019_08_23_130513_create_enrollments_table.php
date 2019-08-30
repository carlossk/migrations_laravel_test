<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('licenciatura')->unsigned();
            $table->bigInteger('posgrado')->unsigned();
            $table->bigInteger('matriculaTsu')->unsigned();
            $table->bigInteger('matriculaLicenciatura')->unsigned();
            $table->bigInteger('matriculaEspecializacion')->unsigned();
            $table->bigInteger('matriculaMaestria')->unsigned();
            $table->bigInteger('matriculaDoctorado')->unsigned();
            $table->bigInteger('docentes')->unsigned();
            $table->bigInteger('docentesInvestigadores')->unsigned();
            $table->string('ciclo', 20);
            $table->foreign('licenciatura')->references('id')->on('bachelor_degree_enrollments');
            $table->foreign('posgrado')->references('id')->on('postgraduate_enrollments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
