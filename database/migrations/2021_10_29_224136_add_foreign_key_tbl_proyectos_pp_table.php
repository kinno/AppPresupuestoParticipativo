<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTblProyectosPpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tbl_proyectos_pp',function(Blueprint $table){
            $table->bigInteger('id_tipo_proyecto')->unsigned()->after('nombre_proyecto');
            $table->foreign('id_tipo_proyecto')->references('id')->on('cat_tipo_proyecto');
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
        Schema::table('tbl_proyectos_pp',function(Blueprint $table){
            $table->dropForeign('tbl_proyectos_pp_id_tipo_proyecto_foreign');
        });
    }
}
