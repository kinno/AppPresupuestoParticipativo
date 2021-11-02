<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLatlngToTblProyectosPp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_proyectos_pp', function (Blueprint $table) {
            //
            $table->string('latlng')->after('componentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_proyectos_pp', function (Blueprint $table) {
            //
            $table->dropColumn("latlng");
        });
    }
}
