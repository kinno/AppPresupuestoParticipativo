<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyCatTipoProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('cat_tipo_proyecto', function (Blueprint $table) {
            //
            $table->bigInteger('id_rubro')->unsigned()->after('descripcion');
            $table->foreign('id_rubro')->references('id')->on('cat_rubro_inversion');
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
        Schema::table('cat_tipo_proyecto', function (Blueprint $table) {
            //
            $table->dropForeign('cat_tipo_proyecto_id_rubro_foreign');
        });
    }
}
