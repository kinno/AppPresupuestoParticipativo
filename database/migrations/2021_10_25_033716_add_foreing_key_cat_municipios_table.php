<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeyCatMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cat_municipios', function (Blueprint $table) {
            //
            $table->bigInteger('id_region')->unsigned();
            $table->foreign('id_region')->references('id')->on('cat_regiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_municipios', function (Blueprint $table) {
            //
            $table->dropForeign('cat_municipios_id_region_foreign');
        });
    }
}
