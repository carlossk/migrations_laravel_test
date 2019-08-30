<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingKeyMunicipioInstitutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campuses', function (Blueprint $table) {
            $table->foreign('municipio')->references('claveEntidadMunicipio')->on('municipalities');
            $table->foreign('instituto')->references('claveInstitucion')->on('institutes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campuses', function (Blueprint $table) {
            //
        });
    }
}
