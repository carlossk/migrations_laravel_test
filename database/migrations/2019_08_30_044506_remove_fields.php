<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campuses', function (Blueprint $table) {
            $table->dropForeign(['municipio']);
            $table->dropForeign(['instituto']);
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
            $table->foreign('municipio')->references('id')->on('municipalities');
            $table->foreign('instituto')->references('id')->on('institutes');
        });
    }
}
