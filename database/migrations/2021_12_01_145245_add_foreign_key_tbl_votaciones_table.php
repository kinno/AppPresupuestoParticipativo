<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTblVotacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_votaciones',function(Blueprint $table){
            $table->bigInteger('id_proyecto_pp')->unsigned()->after('curp');
            $table->foreign('id_proyecto_pp')->references('id')->on('tbl_proyectos_pp');
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

        Schema::table('tbl_votaciones',function(Blueprint $table){
            $table->dropForeign('tbl_votaciones_id_proyecto_pp_foreign');
        });
    }
}
